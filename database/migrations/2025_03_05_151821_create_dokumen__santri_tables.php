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
            $table->string('scan_foto');
            $table->string('scan_kk');
            $table->string('scan_ktp_ayah');
            $table->string('scan_ktp_ibu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen__santri');
    }
};
