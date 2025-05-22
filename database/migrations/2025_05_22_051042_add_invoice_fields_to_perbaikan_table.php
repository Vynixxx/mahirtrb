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
        Schema::table('perbaikan', function (Blueprint $table) {
            $table->string('invoice_no')->nullable();
            $table->decimal('harga_total', 15, 2)->nullable();
            $table->timestamp('invoice_sent_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('perbaikan', function (Blueprint $table) {
            $table->dropColumn(['invoice_no', 'harga_total', 'invoice_sent_at']);
        });
    }
};
