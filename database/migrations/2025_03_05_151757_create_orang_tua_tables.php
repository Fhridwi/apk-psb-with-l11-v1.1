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
        Schema::create('orang_tua', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah', 100);
            $table->string('nama_ibu', 100);
            $table->string('pekerjaan_ayah', 100);
            $table->string('pekerjaan_ibu', 100);
            $table->decimal('penghasilan_ayah', 10, 2);
            $table->decimal('penghasilan_ibu', 10, 2);
            $table->enum('status_ayah', ['Hidup', 'Meninggal']);
            $table->enum('status_ibu', ['Hidup', 'Meninggal']);
            $table->text('alamat_orang_tua');
            $table->string('nomor_hp_orang_tua', 15);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orang_tua');
    }
};
