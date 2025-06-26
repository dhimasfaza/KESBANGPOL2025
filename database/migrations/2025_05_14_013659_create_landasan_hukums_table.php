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
        Schema::create('landasan_hukum', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_peraturan');
            $table->string('nomor_peraturan');
            $table->year('tahun_peraturan');
            $table->text('tentang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landasan_hukum');
    }
};
