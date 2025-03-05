<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LayananKendaraan;
use App\Models\Galeri;



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

    public function halamanproduk()
    {
        return view('produk');
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
        return view('mitra');
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
        $gambar = Galeri::orderBy('created_at', 'desc')->get();
        return view('home', compact('layanan', 'gambar'));
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
}
