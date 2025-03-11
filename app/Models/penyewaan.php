<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class penyewaan extends Model
{
    use HasFactory;

    protected $table = 'penyewaan';

    protected $fillable = [
        'nama',
        'nohp',
        'email',
        'jenis_kendaraan',
        'jumlah_kebutuhan',
        'durasi',
        'satuan_durasi',
        'awal_penyewaan',
        'catatan_tambahan'
    ];
}
