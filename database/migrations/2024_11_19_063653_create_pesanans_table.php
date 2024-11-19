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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->integer('Idpesanan')->primary();
            $table->foreign('Idmenu')->references('Idmenu')->on('menus'); 
            $table->foreign('Idpelanggan')->references('Idpelanggan')->on('pelanggans');
            $table->foreign('Iduser')->references('Iduser')->on('users');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
