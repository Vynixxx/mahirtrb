<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class perbaikan extends Model
{
    use HasFactory;

    protected $table = 'perbaikan';

    protected $fillable = [
        'nama',
        'nohp',
        'email',
        'nopol',
        'jenis',
        'kendala_kendaraan',
        'catatan_tambahan'
    ];
}
