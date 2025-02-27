<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class pageAdmin extends Controller
{
    public function halamanlayanan()
    {
        return view('admin.layanan');
    }

    public function halamangaleri()
    {
        return view('admin.galeri');
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
}
