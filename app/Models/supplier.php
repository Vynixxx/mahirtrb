<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';
    protected $fillable = [
        'nama',
        'nohp',
        'email',
        'nama_barang',
        'merek_spesifikasi',
        'jumlah',
        'satuan',
        'tanggal_kebutuhan',
        'catatan',
        'invoice_no', 'harga_total', 'invoice_sent_at'
    ];
}
