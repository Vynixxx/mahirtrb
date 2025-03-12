<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LayananKendaraan;
use App\Models\Galeri;
use App\Models\kontak;
use App\Models\mitra;
use App\Models\ekspedisi;
use App\Models\pabrikasi;
use App\Models\supplier;
use App\Models\perbaikan;
use App\Models\penyewaan;


class pageAdmin extends Controller
{
    public function halamanlayanan()
    {
        $layanankendaraan = layanankendaraan::get();
        return view('admin.layanan', compact('layanankendaraan'));
    }

    public function halamangaleri()
    {
        $galeri = galeri::get();
        return view('admin.galeri', compact('galeri'));
    }

    public function halamankontak()
    {
        $kontak = kontak::get();
        return view('admin.kontak', compact('kontak'));
    }

    public function halamanprofile()
    {
        return view('admin.profile');
    }

    public function halamanmitra()
    {
        $mitra = mitra::get();
        return view('admin.mitra', compact('mitra'));
    }

    public function halamanekspedisi()
    {
        $eks = ekspedisi::get();
        return view('admin.pemesanan.ekspedisi', compact('eks'));
    }

    public function halamanpabrikasi()
    {
        $pabs = pabrikasi::get();
        return view('admin.pemesanan.pabrikasi', compact('pabs'));
    }

    public function halamanpenyewaan()
    {
        $sewa = penyewaan::get();
        return view('admin.pemesanan.penyewaan', compact('sewa'));
    }

    public function halamanperbaikan()
    {
        $perb = perbaikan::get();
        return view('admin.pemesanan.perbaikan', compact('perb'));
    }

    public function halamansupplier()
    {
        $sup = supplier::get();
        return view('admin.pemesanan.supplier', compact('sup'));
    }

    public function halamanselengkapnya($id)
    {
        $kontak = kontak::find($id);
        return view('admin.selengkapnya', compact('kontak'));
    }

    public function halamaneksselengkapnya($id)
    {
        $eks = ekspedisi::find($id);
        return view('admin.pemesanan.eksselengkapnya', compact('eks'));
    }

    public function halamanpabsselengkapnya($id)
    {
        $pabs = pabrikasi::find($id);
        return view('admin.pemesanan.pabsselengkapnya', compact('pabs'));
    }

    public function halamansewaselengkapnya($id)
    {
        $sewa = penyewaan::find($id);
        return view('admin.pemesanan.sewaselengkapnya', compact('sewa'));
    }

    public function halamanperbselengkapnya($id)
    {
        $perb = perbaikan::find($id);
        return view('admin.pemesanan.perbselengkapnya', compact('perb'));
    }   
    
    public function halamansupselengkapnya($id)
    {
        $sup = supplier::find($id);
        return view('admin.pemesanan.supselengkapnya', compact('sup'));
    }

    //halaman tambah
    public function tambahlayanan()
    {
        return view('admin.tambahlayanan');
    }
    public function tambahgaleri()
    {
        return view('admin.tambahgaleri');
    }
    public function tambahmitra()
    {
        return view('admin.tambahmitra');
    }

    //logika tambah data
    public function layanantambah(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // Maksimal ukuran 5MB
        ]);
    
        // Menyimpan berita ke database
        $kendaraan = new LayananKendaraan;
        $kendaraan->nama = $request->input('nama');
        $kendaraan->isi = $request->input('isi');
    
        // Proses penyimpanan gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $kendaraan->gambar = $filename;
        }
    
        // Simpan ke database
        if ($kendaraan->save()) {
            return redirect()->route('admin.tambahlayanan')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahlayanan')->with('failed', 'Gagal menambahkan data.');
        }
    }

    public function galeritambah(Request $request)
    {
        // Validasi input
        $request->validate([
            'kategori' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // Maksimal ukuran 5MB
        ]);
    
        // Menyimpan berita ke database
        $galeri = new Galeri;
        $galeri->kategori = $request->input('kategori');
    
        // Proses penyimpanan gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $galeri->gambar = $filename;
        }
    
        // Simpan ke database
        if ($galeri->save()) {
            return redirect()->route('admin.tambahgaleri')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahgaleri')->with('failed', 'Gagal menambahkan data.');
        }
    }

    public function mitratambah(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // Maksimal ukuran 5MB
        ]);
    
        // Menyimpan berita ke database
        $mitra = new mitra;
        $mitra->nama = $request->input('nama');
    
        // Proses penyimpanan gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $mitra->gambar = $filename;
        }
    
        // Simpan ke database
        if ($mitra->save()) {
            return redirect()->route('admin.mitra')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.mitra')->with('failed', 'Gagal menambahkan data.');
        }
    }

    //edit
    public function editlayanan($id)
    {
        $layanankendaraan = layanankendaraan::find($id);
        return view('admin.editlayanan', compact('layanankendaraan'));
    }
    public function postEditlayanan(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // Gambar opsional saat edit
        ]);
        
        // Menemukan layanan berdasarkan ID
        $layanankendaraan = layanankendaraan::find($id);
        if (!$layanankendaraan) {
            return redirect()->route('admin.tambahlayanan')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data layanan
        $layanankendaraan->nama = $request->input('nama');
        $layanankendaraan->isi = $request->input('isi');

        // Proses penyimpanan gambar jika ada gambar baru
        if ($request->hasFile('gambar')) {
            // Menghapus gambar lama jika ada
            if ($layanankendaraan->gambar && file_exists(public_path('images/' . $layanankendaraan->gambar))) {
                unlink(public_path('images/' . $layanankendaraan->gambar));
            }

            // Menyimpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $layanankendaraan->gambar = $filename;
        }

        // Simpan ke database
        if ($layanankendaraan->save()) {
            return back()->with('success', 'Data berhasil diupdate!');
        } else {
            return back()->with('failed', 'Data gagal diupdate!');
        }
    }

    public function editgaleri($id)
    {
        $galeri = galeri::find($id);
        return view('admin.editgaleri', compact('galeri'));
    }
    public function postEditgaleri(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'kategori' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // Gambar opsional saat edit
        ]);
        
        // Menemukan galeri berdasarkan ID
        $galeri = galeri::find($id);
        if (!$galeri) {
            return redirect()->route('admin.tambahgaleri')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data galeri
        $galeri->kategori = $request->input('kategori');

        // Proses penyimpanan gambar jika ada gambar baru
        if ($request->hasFile('gambar')) {
            // Menghapus gambar lama jika ada
            if ($galeri->gambar && file_exists(public_path('images/' . $galeri->gambar))) {
                unlink(public_path('images/' . $galeri->gambar));
            }

            // Menyimpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $galeri->gambar = $filename;
        }

        // Simpan ke database
        if ($galeri->save()) {
            return back()->with('success', 'Data berhasil diupdate!');
        } else {
            return back()->with('failed', 'Data gagal diupdate!');
        }
    }

    public function editmitra($id)
    {
        $mitra = mitra::find($id);
        return view('admin.editmitra', compact('mitra'));
    }
    public function postEditmitra(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // Gambar opsional saat edit
        ]);
        
        // Menemukan mitra berdasarkan ID
        $mitra = mitra::find($id);
        if (!$mitra) {
            return redirect()->route('admin.tambahmitra')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data mitra
        $mitra->nama = $request->input('nama');

        // Proses penyimpanan gambar jika ada gambar baru
        if ($request->hasFile('gambar')) {
            // Menghapus gambar lama jika ada
            if ($mitra->gambar && file_exists(public_path('images/' . $mitra->gambar))) {
                unlink(public_path('images/' . $mitra->gambar));
            }

            // Menyimpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $mitra->gambar = $filename;
        }

        // Simpan ke database
        if ($mitra->save()) {
            return back()->with('success', 'Data berhasil diupdate!');
        } else {
            return back()->with('failed', 'Data gagal diupdate!');
        }
    }

    //hapus
    public function deletelayanan($id)
    {
        $layanankendaraan = layanankendaraan::find($id);

        $layanankendaraan->delete();
        if ($layanankendaraan) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    public function deletegaleri($id)
    {
        $galeri = galeri::find($id);

        $galeri->delete();
        if ($galeri) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    public function deletekontak($id)
    {
        $kontak = kontak::find($id);

        $kontak->delete();
        if ($kontak) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }
    
    public function deletemitra($id)
    {
        $mitra = mitra::find($id);

        $mitra->delete();
        if ($mitra) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    public function deleteks($id)
    {
        $eks = ekspedisi::find($id);

        $eks->delete();
        if ($eks) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }
    
    public function deletepabrikasi($id)
    {
        $pabrikasi = pabrikasi::find($id);

        $pabrikasi->delete();
        if ($pabrikasi) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    public function deletepenyewaan($id)
    {
        $penyewaan = penyewaan::find($id);

        $penyewaan->delete();
        if ($penyewaan) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    public function deleteperbaikan($id)
    {
        $perbaikan = perbaikan::find($id);

        $perbaikan->delete();
        if ($perbaikan) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    public function deletesupplier($id)
    {
        $supplier = supplier::find($id);

        $supplier->delete();
        if ($supplier) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }
}
