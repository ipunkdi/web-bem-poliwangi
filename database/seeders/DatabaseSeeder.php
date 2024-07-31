<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kastrat;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Dafa Ifaldi',
            'username' => 'ipunkdi',
            'email' => 'dafaifaldi25@gmail.com',
            'password' => bcrypt('password')
        ]);

        Kastrat::factory(20)->create();
    }
}
