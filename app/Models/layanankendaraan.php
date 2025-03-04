<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class layanankendaraan extends Model
{
    use HasFactory;

    protected $table = 'layanankendaraan';

    protected $fillable = [
        'gambar', 'nama', 'isi',
    ];
}
