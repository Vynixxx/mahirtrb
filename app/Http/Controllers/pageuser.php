<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageuser extends Controller
{
    public function halamansewa()
    {
        return view('penyewaan');
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
        return view('galeri');
    }
    
    public function halamanhome()
    {
        return view('home');
    }
}
