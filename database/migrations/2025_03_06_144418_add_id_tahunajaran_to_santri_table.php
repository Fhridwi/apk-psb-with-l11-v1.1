<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('santri', function (Blueprint $table) {
            $table->foreignId('id_tahunajaran')
                  ->constrained('tahun_ajaran')
                  ->onDelete('cascade')
                  ->after('dokumen_santri_id');
        });
    }

    public function down() {
        Schema::table('santri', function (Blueprint $table) {
            $table->dropForeign(['id_tahunajaran']);
            $table->dropColumn('id_tahunajaran');
        });
    }
};

