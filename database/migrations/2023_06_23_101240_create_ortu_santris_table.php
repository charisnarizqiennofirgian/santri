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
        Schema::create('ortu_santri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('santri_id');
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('pendapatan_ayah')->nullable();
            $table->string('pendapatan_ibu')->nullable();
            $table->string('email_ortu')->nullable();
            $table->string('nohp_ortu')->nullable();
            $table->tinyInteger('is_filled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ortu_santri');
    }
};
