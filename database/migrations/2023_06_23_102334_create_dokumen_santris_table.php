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
        Schema::create('dokumen_santri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('santri_id');
            $table->string('photo')->nullable();
            $table->string('kartu_identitas')->nullable();
            $table->string('akta')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('skhun')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_santri');
    }
};
