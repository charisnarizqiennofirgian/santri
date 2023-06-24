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
        Schema::create('status_santri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('santri_id');
            $table->enum('informasi_pendaftar', ['Lolos', 'Menunggu Verifikasi'])->default('Menunggu Verifikasi');
            $table->enum('dokumen_pendukung', ['Lolos', 'Menunggu Verifikasi'])->default('Menunggu Verifikasi');
            $table->enum('diterima', ['Lolos', 'Menunggu Verifikasi'])->default('Menunggu Verifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_santri');
    }
};
