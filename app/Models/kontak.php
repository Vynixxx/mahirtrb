<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class kontak extends Model
{
    use HasFactory;

    protected $table = 'kontak';
    
    protected $fillable = ['name', 'email', 'whatsapp', 'subject', 'message'];
}
