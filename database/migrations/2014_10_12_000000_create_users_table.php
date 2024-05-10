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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_akun');
            $table->string('nama_toko');
            $table->string('email')->unique();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->integer('umur');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->integer('rate');
            $table->string('produk_terbaik');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
