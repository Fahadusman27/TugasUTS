<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data pengguna dengan role 'admin'
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'fahad@gmail.com',
                'role' => 'admin', // Menetapkan role sebagai admin
                'password' => Hash::make('fahad12'), // Hash password
            ],
            // Tambahkan lebih banyak data jika diperlukan
        ]);
        DB::table('users')->insert([
            [
                'name' => 'User',
                'email' => 'guest@gmail.com',
                'role' => 'guest', // Menetapkan role sebagai admin
                'password' => Hash::make('guest13'), // Hash password
            ],
            // Tambahkan lebih banyak data jika diperlukan
        ]);
    }
}
