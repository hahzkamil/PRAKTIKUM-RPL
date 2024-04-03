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
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('metode');
            $table->integer('biaya');
            $table->string('nomor_resi');
            $table->foreignId('id_consumer')->constrained('pembeli')->cascadeOnDelete();
            $table->foreignId('id_user')->constrained('mitra')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengiriman');
    }
};
