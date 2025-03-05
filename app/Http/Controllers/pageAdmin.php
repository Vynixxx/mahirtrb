<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LayananKendaraan;
use App\Models\Galeri;


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
        return view('admin.kontak');
    }

    public function halamanpemesanan()
    {
        return view('admin.pemesanan');
    }

    public function halamanprofile()
    {
        return view('admin.profile');
    }

    public function halamanmitra()
    {
        return view('admin.mitra');
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

    //logika tambah data
    public function layanantambah(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'required|image|max:5120', // Maksimal ukuran 5MB
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
            'gambar' => 'required|image|max:5120', // Maksimal ukuran 5MB
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
            'gambar' => 'nullable|image|max:5120', // Gambar opsional saat edit
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
}
