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
        Schema::create('identitas_santri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nisn')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->text('alamat_lengkap')->nullable();
            $table->string('email')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('jumlah_saudara')->nullable();
            $table->string('anak_ke')->nullable();
            $table->unsignedBigInteger('jenjang_id')->nullable();
            $table->unsignedBigInteger('jurusan_id')->nullable();
            $table->string('foto')->nullable();
            $table->tinyInteger('is_filled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas_santri');
    }
};
