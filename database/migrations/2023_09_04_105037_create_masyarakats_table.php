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
        Schema::create('masyarakats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('no_kk');
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->boolean('status_perkawinan'); // Mengubah tipe data menjadi boolean
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('rt');
            $table->string('rw');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masyarakats');
    }
};
