<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'username' => 'admin',
            'password' => Hash::make('password')
        ]);
    }
}
