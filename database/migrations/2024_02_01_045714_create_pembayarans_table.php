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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id('pembayaran_id');
            $table->foreignId('petugas_id')->references('petugas_id')->on('petugass');
            $table->string('nisn',10);
            $table->foreign('nisn')->references('nisn')->on('siswas');
            $table->date('tgl_bayar');
            $table->string('bulan_dibayar',8);
            $table->string('tahun_dibayar',4);
            $table->foreignId('spp_id')->references('spp_id')->on('siswas');
            $table->integer('jumlah_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
