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
        Schema::create('detail_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_item');
            $table->string('jenis_ikan');
            $table->string('deskripsi_ikan');
            $table->integer('harga');
            $table->foreignId('id_user')->constrained('user')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_barang');
    }
};
