<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('no_pendaftaran', 20)->unique();
            $table->string('nama_lengkap', 100);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->integer('anak_ke');
            $table->string('asal_sekolah', 100);
            $table->text('alamat');
            $table->foreignId('program_sekolah_id')->constrained('program_sekolah')->onDelete('cascade');
            $table->foreignId('orang_tua_id')->constrained('orang_tua')->onDelete('cascade');
            $table->foreignId('tahun_id')->constrained('tahun_ajaran')->onDelete('cascade');
            $table->foreignId('wali_id')->nullable()->constrained('wali')->onDelete('set null');
            $table->foreignId('dokumen_santri_id')->constrained('dokumen_santri')->onDelete('cascade');
            $table->foreignId('akun_id')->constrained('users')->onDelete('cascade'); // Menambahkan akun_id
            $table->enum('status_pendaftaran', ['Pending', 'Diverifikasi', 'Diterima', 'Ditolak'])->default('Pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('santri');
    }
};

