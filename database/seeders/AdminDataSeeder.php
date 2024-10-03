<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // creating an account using seeder
        DB::table('users')->insert([
            'name' => 'bert',
            'email' => 'admin@gmail.com',
            'photo' => 'image.jpg',
            'password' => Hash::make('111')
        ]);

        DB::table('users')->insert([
            'name' => 'je',
            'email' => 'je@gmail.com',
            'photo' => 'image.jpg',
            'password' => Hash::make('111')
        ]);
    }
}
