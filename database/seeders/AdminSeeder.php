<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan user administrator ke tabel users
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@admin',
            'password' => Hash::make('adminadmin'), // Mengenkripsi password
        ]);
    }
}