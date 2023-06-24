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
        Schema::create('wali_santri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('santri_id');
            $table->string('nama_wali')->nullable();
            $table->string('identitas_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->date('tgl_lahir_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->string('nohp_wali')->nullable();
            $table->string('email_wali')->nullable();
            $table->string('status_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('pendapatan_wali')->nullable();
            $table->tinyInteger('is_filled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali_santri');
    }
};
