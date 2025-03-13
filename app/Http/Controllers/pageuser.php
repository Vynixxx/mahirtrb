<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LayananKendaraan;
use App\Models\Galeri;
use App\Models\Kontak;
use App\Models\mitra;
use App\Models\ekspedisi;
use App\Models\pabrikasi;
use App\Models\penyewaan;
use App\Models\perbaikan;
use App\Models\supplier;
use Exception;


class pageuser extends Controller
{
    public function halamanpesan()
    {
        return view('pemesanan');
    }

    public function halamansewa()
    {
        return view('penyewaan');
    }

    public function halamanekspedisi()
    {
        return view('ekspedisi');
    }

    public function halamanperbaikan()
    {
        return view('perbaikan');
    }

    public function halamanpabrikasi()
    {
        return view('pabrikasi');
    }

    public function halamansupplier()
    {
        return view('supplier');
    }

    public function halamanproduk()
    {
        $layanan = layanankendaraan::get();
        return view('produk', compact('layanan'));
    }

    public function halamansk()
    {
        return view('sk');
    }

    public function halamanabout()
    {
        return view('about');
    }

    public function halamanmitra()
    {
        $mitra = mitra::get();
        return view('mitra', compact('mitra'));
    }

    public function halamanlayanan()
    {
        return view('layanan');
    }

    public function halamankontak()
    {
        return view('kontak');
    }

    public function halamangaleri()
    {
        $kategoris = galeri::select('kategori')->distinct()->pluck('kategori');
        $gambar = galeri::get();
        return view('galeri', compact('kategoris', 'gambar'));
    }

    public function filter($kategori) {
        if ($kategori == 'semua') {
            $galeris = Galeri::all(); // Ambil semua gambar jika kategori "semua"
        } else {
            $galeris = Galeri::where('kategori', $kategori)->get();
        }
        
        return response()->json($galeris);
    }
    
    public function halamanhome()
    {
        $layanan = LayananKendaraan::get();
        $gambar = Galeri::orderBy('created_at', 'desc')->take(8)->get(); 
        $mitra = mitra::get();
        return view('home', compact('layanan', 'gambar', 'mitra'));
    }

    public function halamanpesanekspedisi()
    {
        return view('pesanekspedisi');
    }
    public function halamanpesanpabrikasi()
    {
        return view('pesanpabrikasi');
    }
    public function halamanpesanpenyewaan()
    {
        return view('pesanpenyewaan');
    }
    public function halamanpesanperbaikan()
    {
        return view('pesanperbaikan');
    }
    public function halamanpesansupplier()
    {
        return view('pesansupplier');
    }

    //tambah
    public function tambahkontak(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'whatsapp' => 'required|regex:/^[0-9]+$/|min:10|max:15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        try {
            // Ambil nomor WhatsApp dari request dan hilangkan spasi yang tidak perlu
            $whatsapp = trim($request->whatsapp);

            // Jika nomor dimulai dengan "08", ubah ke format "62"
            if (preg_match('/^08[0-9]{8,12}$/', $whatsapp)) {
                $whatsapp = '62' . substr($whatsapp, 1); // Ubah "08xxxxxx" menjadi "62xxxxxx"
            }
            // Simpan ke database
            kontak::create([
                'name' => $request->name,
                'email' => $request->email,
                'whatsapp' => $whatsapp,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            return back()->with('success', 'Pesan Anda telah dikirim! Kami segera menghubungi Anda.');
        } catch (Exception $e) {
            return back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }

    public function tambahekspedisi(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nohp' => 'required|regex:/^[0-9]+$/|min:10|max:15',
            'email' => 'required|email|max:255',
            'jenis' => 'required|string|in:Truk Foco,Crane,Dozer,Lowbed,Triller,Truk Kepala,Truk Tandem,Truk Vakum,Tangki Air',
            'jml' => 'required|integer|min:1',
            'awal' => 'required|date',
            'akhir' => 'required|date|after_or_equal:awal',
            'isi' => 'nullable|string'
        ]);

        try {
            // Ambil nomor WhatsApp dari request dan hilangkan spasi yang tidak perlu
            $nohp = trim($request->nohp);

            // Jika nomor dimulai dengan "08", ubah ke format "62"
            if (preg_match('/^08[0-9]{8,12}$/', $nohp)) {
                $nohp = '62' . substr($nohp, 1); // Ubah "08xxxxxx" menjadi "62xxxxxx"
            }

            // Simpan data ke database
            ekspedisi::create([
                'nama' => $request->nama,
                'nohp' => $nohp,
                'email' => $request->email,
                'jenis' => $request->jenis,
                'jml' => $request->jml,
                'awal' => $request->awal,
                'akhir' => $request->akhir,
                'isi' => $request->isi,
            ]);

            return redirect()->route('home')->with('success', 'Pesanan Anda berhasil dibuat. Tim kami akan segera menghubungi Anda.');
        } catch (Exception $e) {
            return back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }

    public function tambahpabrikasi(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nohp' => 'required|regex:/^[0-9]+$/|min:10|max:15',
            'email' => 'required|email|max:255',
            'jenis_pabrikasi' => 'required|string|in:Material,Jasa,Material + Jasa',
            'jenis_kendaraan' => 'required|string|max:255',
            'isi' => 'nullable|string',
        ]);

        try {
            // Ambil nomor WhatsApp dari request dan hilangkan spasi yang tidak perlu
            $nohp = trim($request->nohp);

            // Jika nomor dimulai dengan "08", ubah ke format "62"
            if (preg_match('/^08[0-9]{8,12}$/', $nohp)) {
                $nohp = '62' . substr($nohp, 1); // Ubah "08xxxxxx" menjadi "62xxxxxx"
            }

            // Simpan data ke database
            pabrikasi::create([
                'nama' => $request->nama,
                'nohp' => $nohp,
                'email' => $request->email,
                'jenis_pabrikasi' => $request->jenis_pabrikasi,
                'jenis_kendaraan' => $request->jenis_kendaraan,
                'isi' => $request->isi,
            ]);

            return redirect()->route('home')->with('success', 'Pesanan Anda berhasil dibuat. Tim kami akan segera menghubungi Anda.');
        } catch (\Exception $e) {
            return back()->with('failed', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }

    public function tambahpenyewaan(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nohp' => 'required|regex:/^[0-9]+$/|min:10|max:15',
            'email' => 'required|email|max:255',
            'jenis_kendaraan' => 'required|string|max:255',
            'jumlah_kebutuhan' => 'required|integer|min:1',
            'durasi' => 'required|integer|min:1',
            'satuan_durasi' => 'required|in:hari,minggu,bulan,tahun',
            'awal_penyewaan' => 'required|date',
            'dengan_tim' => 'required|string', // Tambahkan validasi radio button
            'catatan_tambahan' => 'nullable|string',
        ]);

        try {
            // Format nomor WhatsApp
            $nohp = trim($request->nohp);
            if (preg_match('/^08[0-9]{8,12}$/', $nohp)) {
                $nohp = '62' . substr($nohp, 1);
            }

            // Simpan ke database
            penyewaan::create([
                'nama' => $request->nama,
                'nohp' => $nohp,
                'email' => $request->email,
                'jenis_kendaraan' => $request->jenis_kendaraan,
                'jumlah_kebutuhan' => $request->jumlah_kebutuhan,
                'durasi' => $request->durasi,
                'satuan_durasi' => $request->satuan_durasi,
                'awal_penyewaan' => $request->awal_penyewaan,
                'dengan_tim' => $request->dengan_tim,
                'catatan_tambahan' => $request->catatan_tambahan,
            ]);

            return redirect()->route('home')->with('success', 'Pesanan Anda berhasil dibuat. Tim kami akan segera menghubungi Anda.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan, silakan coba lagi.');
        }
    }

    public function tambahperbaikan(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nohp' => 'required|regex:/^[0-9]+$/|min:10|max:15',
            'email' => 'required|email|max:255',
            'nopol' => 'required|string|max:12',
            'jenis' => 'required|string|max:255',
            'kendala_kendaraan' => 'required|string',
            'catatan_tambahan' => 'nullable|string',
        ]);

        try {
            // Format nomor WhatsApp
            $nohp = trim($request->nohp);
            if (preg_match('/^08[0-9]{8,12}$/', $nohp)) {
                $nohp = '62' . substr($nohp, 1);
            }

            // Konversi plat nomor menjadi huruf besar
            $nopol = strtoupper(trim($request->nopol));

            // Simpan data ke database
            perbaikan::create([
                'nama' => $request->nama,
                'nohp' => $nohp,
                'email' => $request->email,
                'nopol' => $nopol,
                'jenis' => $request->jenis,
                'kendala_kendaraan' => $request->kendala_kendaraan,
                'catatan_tambahan' => $request->catatan_tambahan,
            ]);

            return redirect()->route('home')->with('success', 'Pesanan Anda berhasil dibuat. Tim kami akan segera menghubungi Anda.');
        } catch (Exception $e) {
            return back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }

    public function tambahsupplier(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nohp' => 'required|regex:/^[0-9]+$/|min:10|max:15',
            'email' => 'required|email|max:255',
            'nama_barang' => 'required|string|max:255',
            'merek_spesifikasi' => 'nullable|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'satuan' => 'required|string|in:unit,liter,kilogram,meter',
            'tanggal_kebutuhan' => 'required|date',
            'catatan' => 'nullable|string',
        ]);

        try {
            // Format nomor WhatsApp
            $nohp = trim($request->nohp);
            if (preg_match('/^08[0-9]{8,12}$/', $nohp)) {
                $nohp = '62' . substr($nohp, 1);
            }

            // Simpan data ke database
            supplier::create([
                'nama' => $request->nama,
                'nohp' => $nohp,
                'email' => $request->email,
                'nama_barang' => $request->nama_barang,
                'merek_spesifikasi' => $request->merek_spesifikasi,
                'jumlah' => $request->jumlah,
                'satuan' => $request->satuan,
                'tanggal_kebutuhan' => $request->tanggal_kebutuhan,
                'catatan' => $request->catatan,
            ]);

            return redirect()->route('home')->with('success', 'Pesanan Anda berhasil dibuat. Tim kami akan segera menghubungi Anda.');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }

}
