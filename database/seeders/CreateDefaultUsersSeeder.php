<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateDefaultUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin User
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@perpustakaan.test',
            'password' => bcrypt('password123'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        // Create Petugas User
        User::create([
            'name' => 'Petugas Perpustakaan',
            'email' => 'petugas@perpustakaan.test',
            'password' => bcrypt('password123'),
            'role' => 'petugas',
            'email_verified_at' => now(),
        ]);
    }
}
