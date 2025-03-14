<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('santri', function (Blueprint $table) {
            $table->string('email', 100)->after('no_pendaftaran')->unique();
        });
    }

    public function down(): void
    {
        Schema::table('nama_tabel', function (Blueprint $table) {
            $table->dropColumn('email');
        });
    }
};
