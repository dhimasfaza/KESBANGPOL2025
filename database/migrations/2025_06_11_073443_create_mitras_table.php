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
        Schema::create('mitras', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori_mitra', ['FORKOPIMDA', 'KPU', 'BAWASLU', 'BNN', 'PARPOL', 'FKDM', 'FKUB', 'FPK']);
            $table->string('logo_lembaga')->nullable();
            $table->string('nama_lembaga');
            $table->text('alamat')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('ketua')->nullable();
            $table->string('foto_ketua')->nullable();
            $table->string('kontak')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitras');
    }
};
