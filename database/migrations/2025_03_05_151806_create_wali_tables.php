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
        Schema::create('wali', function (Blueprint $table) {
            $table->id();
            $table->string('hubungan_wali', 50);
            $table->string('nama_wali', 100);
            $table->string('pekerjaan_wali', 100);
            $table->decimal('penghasilan_wali', 10, 2);
            $table->text('alamat_wali');
            $table->string('nomor_hp_wali', 15);
            $table->string('email_wali', 100);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali');
    }
};
