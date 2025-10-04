<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'username' => 'admin',
            'password' => Hash::make('123123'),
            'nama' => 'Admin Santoso',
            'role' => 'admin',
        ]);
        User::create([
            'username' => 'siswa',
            'password' => Hash::make('123123'),
            'nama' => 'Siswa Santoso',
            'role' => 'siswa',
        ]);
        User::create([
            'username' => 'kepalaSekolah',
            'password' => Hash::make('123123'),
            'nama' => 'Kepala Santoso',
            'role' => 'kepala-sekolah',
        ]);
    }
}
