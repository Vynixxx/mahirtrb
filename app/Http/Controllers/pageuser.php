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
use Illuminate\Support\Facades\Session;
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
        // Cek bahasa yang dipilih dari session (default bahasa Indonesia)
        $locale = session()->get('locale', 'id'); // 'id' adalah default jika tidak ada di session

        // Mengambil data layanan dari database
        $layanan = LayananKendaraan::all();

        // Memilih kolom 'isi' atau 'isi_en' berdasarkan bahasa yang dipilih
        foreach ($layanan as $p) {
            if ($locale == 'en') {
                $p->isi = $p->isi_en; // Ganti 'isi' dengan 'isi_en' jika bahasa yang dipilih adalah 'en'
            }
        }
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
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
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
            // Escape karakter spesial sebelum menyimpan ke database
            $safeData = [
                'name' => htmlspecialchars($request->name, ENT_QUOTES, 'UTF-8'),
                'email' => htmlspecialchars($request->email, ENT_QUOTES, 'UTF-8'),
                'whatsapp' => $whatsapp, // Tidak perlu htmlspecialchars karena hanya angka
                'subject' => htmlspecialchars($request->subject, ENT_QUOTES, 'UTF-8'),
                'message' => htmlspecialchars($request->message, ENT_QUOTES, 'UTF-8'),
            ];
    
            // Simpan ke database
            kontak::create($safeData);

            return back()->with('success', __('msg.feedback_success'));
        } catch (Exception $e) {
            return back()->with('error', __('msg.feedback_error'));
        }
    }

    public function tambahekspedisi(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nohp' => 'required|regex:/^[0-9]+$/|min:10|max:15',
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'jenis' => 'required|string|in:Bulldozer,Crane,Foco Truck,Trailer,Lowbed Trailer,Prime Mover,Tandem Roller,Vacuum Truck,Water Tank Truck',
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

            
        // Escape karakter spesial sebelum menyimpan ke database
        $safeData = [
            'nama' => htmlspecialchars($request->nama, ENT_QUOTES, 'UTF-8'),
            'nohp' => $nohp, // Tidak perlu htmlspecialchars karena hanya angka
            'email' => htmlspecialchars($request->email, ENT_QUOTES, 'UTF-8'),
            'jenis' => htmlspecialchars($request->jenis, ENT_QUOTES, 'UTF-8'),
            'jml' => $request->jml, // Pastikan ini integer
            'awal' => $request->awal, // Sudah divalidasi sebagai tanggal
            'akhir' => $request->akhir, // Sudah divalidasi sebagai tanggal
            'isi' => htmlspecialchars($request->isi, ENT_QUOTES, 'UTF-8'),
        ];

        // Simpan data ke database
        ekspedisi::create($safeData);

            return redirect()->route('home')->with('success', __('validation.order_success'));
        } catch (Exception $e) {
            return back()->with('error',  __('validation.order_error'));
        }
    }

    public function tambahpabrikasi(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nohp' => 'required|regex:/^[0-9]+$/|min:10|max:15',
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
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

            // Escape karakter spesial sebelum menyimpan ke database
            $safeData = [
                'nama' => htmlspecialchars($request->nama, ENT_QUOTES, 'UTF-8'),
                'nohp' => $nohp, // Tidak perlu htmlspecialchars karena hanya angka
                'email' => htmlspecialchars($request->email, ENT_QUOTES, 'UTF-8'),
                'jenis_pabrikasi' => htmlspecialchars($request->jenis_pabrikasi, ENT_QUOTES, 'UTF-8'),
                'jenis_kendaraan' => htmlspecialchars($request->jenis_kendaraan, ENT_QUOTES, 'UTF-8'),
                'isi' => htmlspecialchars($request->isi, ENT_QUOTES, 'UTF-8'),
            ];

            // Simpan data ke database
            pabrikasi::create($safeData);

            return redirect()->route('home')->with('success', __('validation.order_success'));
        } catch (\Exception $e) {
            return back()->with('failed', __('validation.order_error'));
        }
    }

    public function tambahpenyewaan(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nohp' => 'required|regex:/^[0-9]+$/|min:10|max:15',
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'jenis_kendaraan' => 'required|string|in:Bulldozer,Crane,Foco Truck,Trailer,Lowbed Trailer,Prime Mover,Tandem Roller,Vacuum Truck,Water Tank Truck',
            'jumlah_kebutuhan' => 'required|integer|min:1',
            'durasi' => 'required|integer|min:1',
            'satuan_durasi' => 'required|in:hari,minggu,bulan,tahun',
            'awal_penyewaan' => 'required|date',
            'dengan_tim' => 'required|string', 
            'catatan_tambahan' => 'nullable|string',
        ]);

        try {
            // Format nomor WhatsApp
            $nohp = trim($request->nohp);
            if (preg_match('/^08[0-9]{8,12}$/', $nohp)) {
                $nohp = '62' . substr($nohp, 1);
            }

            // Escape karakter spesial sebelum menyimpan ke database
            $safeData = [
                'nama' => htmlspecialchars($request->nama, ENT_QUOTES, 'UTF-8'),
                'nohp' => $nohp, // Tidak perlu htmlspecialchars karena hanya angka
                'email' => htmlspecialchars($request->email, ENT_QUOTES, 'UTF-8'),
                'jenis_kendaraan' => htmlspecialchars($request->jenis_kendaraan, ENT_QUOTES, 'UTF-8'),
                'jumlah_kebutuhan' => $request->jumlah_kebutuhan, // Sudah integer, tidak perlu htmlspecialchars
                'durasi' => $request->durasi, // Sudah integer, tidak perlu htmlspecialchars
                'satuan_durasi' => htmlspecialchars($request->satuan_durasi, ENT_QUOTES, 'UTF-8'),
                'awal_penyewaan' => $request->awal_penyewaan, // Format tanggal, tidak perlu htmlspecialchars
                'dengan_tim' => htmlspecialchars($request->dengan_tim, ENT_QUOTES, 'UTF-8'),
                'catatan_tambahan' => htmlspecialchars($request->catatan_tambahan, ENT_QUOTES, 'UTF-8'),
            ];

            // Simpan ke database
            penyewaan::create($safeData);

            return redirect()->route('home')->with('success', __('validation.order_success'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', __('validation.order_error'));
        }
    }

    public function tambahperbaikan(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nohp' => 'required|regex:/^[0-9]+$/|min:10|max:15',
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
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

            // Escape karakter spesial sebelum menyimpan ke database
            $safeData = [
                'nama' => htmlspecialchars($request->nama, ENT_QUOTES, 'UTF-8'),
                'nohp' => $nohp, // Tidak perlu htmlspecialchars karena hanya angka
                'email' => htmlspecialchars($request->email, ENT_QUOTES, 'UTF-8'),
                'nopol' => htmlspecialchars($nopol, ENT_QUOTES, 'UTF-8'),
                'jenis' => htmlspecialchars($request->jenis, ENT_QUOTES, 'UTF-8'),
                'kendala_kendaraan' => htmlspecialchars($request->kendala_kendaraan, ENT_QUOTES, 'UTF-8'),
                'catatan_tambahan' => htmlspecialchars($request->catatan_tambahan, ENT_QUOTES, 'UTF-8'),
            ];

            // Simpan ke database
            perbaikan::create($safeData);

            return redirect()->route('home')->with('success', __('validation.order_success'));
        } catch (Exception $e) {
            return back()->with('error', __('validation.order_error'));
        }
    }

    public function tambahsupplier(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nohp' => 'required|regex:/^[0-9]+$/|min:10|max:15',
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
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

            // Escape karakter spesial sebelum menyimpan ke database
            $safeData = [
                'nama' => htmlspecialchars($request->nama, ENT_QUOTES, 'UTF-8'),
                'nohp' => $nohp, // Tidak perlu htmlspecialchars karena hanya angka
                'email' => htmlspecialchars($request->email, ENT_QUOTES, 'UTF-8'),
                'nama_barang' => htmlspecialchars($request->nama_barang, ENT_QUOTES, 'UTF-8'),
                'merek_spesifikasi' => htmlspecialchars($request->merek_spesifikasi, ENT_QUOTES, 'UTF-8'),
                'jumlah' => $request->jumlah, // Integer, tidak perlu htmlspecialchars
                'satuan' => htmlspecialchars($request->satuan, ENT_QUOTES, 'UTF-8'),
                'tanggal_kebutuhan' => $request->tanggal_kebutuhan, // Date, tidak perlu htmlspecialchars
                'catatan' => htmlspecialchars($request->catatan, ENT_QUOTES, 'UTF-8'),
            ];

            // Simpan data ke database
            supplier::create($safeData);

            return redirect()->route('home')->with('success', __('validation.order_success'));
        } catch (\Exception $e) {
            return back()->with('error', __('validation.order_error'));
        }
    }

}
