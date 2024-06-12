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
        Schema::create('User', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nama_consumer');
            $table->string('email_consumer')->unique();
            $table->string('alamat_consumer');
            $table->string('nohp_consumer');
            $table->string('profpic');
            $table->enum('role',['nelayan','pembeli'])->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('User');
    }
};
