<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\TahunAjaran;
use App\Models\ProgramSekolah;
use App\Models\Sekolah;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat akun admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);

        $tahunAjaran = [
            ['tahun' => '2021/2022', 'status' => 'ditutup', 'kuota' => '112'],
            ['tahun' => '2022/2023', 'status' => 'ditutup', 'kuota' => '112'],
            ['tahun' => '2023/2024', 'status' => 'ditutup', 'kuota' => '112'],
            ['tahun' => '2024/2025', 'status' => 'ditutup', 'kuota' => '112'],
            ['tahun' => '2025/2026', 'status' => 'dibuka' , 'kuota' => '112'],
        ];

        foreach ($tahunAjaran as $tahun) {
            TahunAjaran::create($tahun);
        }

        $sekolahData = [
            ['sekolah' => 'SD Islam Al-Falah', 'jenjang' => 'SD'],
            ['sekolah' => 'SMP IT Nurul Hikmah', 'jenjang' => 'SLTP'],
            ['sekolah' => 'SMA Islam Al-Azhar', 'jenjang' => 'SLTA'],
            ['sekolah' => 'MA Al-Hikmah', 'jenjang' => 'SLTA'],
            ['sekolah' => 'SMK TI Nurul Fikri', 'jenjang' => 'SLTA'],
        ];

        foreach ($sekolahData as $data) {
            Sekolah::create([
                'sekolah' => $data['sekolah'],
                'jenjang' => $data['jenjang'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    }
    }
}
