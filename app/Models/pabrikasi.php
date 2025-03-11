<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pabrikasi extends Model
{
    use HasFactory;

    protected $table = 'pabrikasi';

    protected $fillable = [
        'nama',
        'nohp',
        'email',
        'jenis_pabrikasi',
        'jenis_kendaraan',
        'isi',
    ];
}
