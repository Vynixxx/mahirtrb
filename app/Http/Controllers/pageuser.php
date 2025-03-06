<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LayananKendaraan;
use App\Models\Galeri;
use App\Models\Kontak;
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
}
