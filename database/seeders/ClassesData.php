<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->insert([
            'class_name' => 'Class One',
            'section' => 'A',
            'created_at' => now(),  // Set created_at
            'updated_at' => now(),  // Set updated_at
        ]);

        DB::table('classes')->insert([
            'class_name' => 'Class Two',
            'section' => 'B',
            'created_at' => now(),  // Set created_at
            'updated_at' => now(),  // Set updated_at
        ]);

        DB::table('classes')->insert([
            'class_name' => 'Class Three',
            'section' => 'C',
            'created_at' => now(),  // Set created_at
            'updated_at' => now(),  // Set updated_at
        ]);
    }
}
