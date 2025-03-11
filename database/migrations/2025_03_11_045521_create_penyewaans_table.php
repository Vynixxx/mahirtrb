<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nohp', 15);
            $table->string('email');
            $table->string('jenis_kendaraan');
            $table->integer('jumlah_kebutuhan');
            $table->integer('durasi');
            $table->enum('satuan_durasi', ['bulan', 'tahun']);
            $table->date('awal_penyewaan');
            $table->text('catatan_tambahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewaan');
    }
};
