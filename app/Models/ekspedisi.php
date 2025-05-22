<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ekspedisi extends Model
{
    use HasFactory;

    protected $table = 'ekspedisi';
    
    protected $fillable = [
        'nama', 'nohp', 'email', 'jenis', 'jml', 'awal', 'akhir', 'isi', 'invoice_no', 'harga_total', 'invoice_sent_at'
    ];
}
