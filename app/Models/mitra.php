<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class mitra extends Model
{
    use HasFactory;

    protected $table = 'mitra';

    protected $fillable = ['nama', 'gambar'];
}
