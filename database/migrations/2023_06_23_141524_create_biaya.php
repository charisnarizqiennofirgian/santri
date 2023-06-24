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
        Schema::create('biaya', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('bukti')->nullable();
            $table->enum('status', ['Lunas', 'Belum Lunas'])->default('Belum Lunas');
            $table->unsignedBigInteger('pendaftaran_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya');
    }
};
