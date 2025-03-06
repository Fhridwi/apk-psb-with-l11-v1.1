<?php

namespace Database\Seeders;

use App\Models\TahunAjaran;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        TahunAjaran::create([
            'tahun' => '2022/2023',
            'kuota' => '301',
            'status' => 'ditutup'
        ]);
    }
}
