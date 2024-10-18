<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // inserting into the table subjects
        DB::table('subjects')->insert([ // Change 'classes' to 'subjects'
            'subject_name' => 'Capstone Project 1',
            'subject_code' => 'ITEC 200A',
            'created_at' => now(),  // Set created_at
            'updated_at' => now(),  // Set updated_at
        ]);
        DB::table('subjects')->insert([ // Change 'classes' to 'subjects'
            'subject_name' => 'Rizal',
            'subject_code' => 'GNED09',
            'created_at' => now(),  // Set created_at
            'updated_at' => now(),  // Set updated_at
        ]);
        DB::table('subjects')->insert([ // Change 'classes' to 'subjects'
            'subject_name' => 'Capstone Project 2',
            'subject_code' => 'ITEC 200B',
            'created_at' => now(),  // Set created_at
            'updated_at' => now(),  // Set updated_at
        ]);
        DB::table('subjects')->insert([ // Change 'classes' to 'subjects'
            'subject_name' => 'System Administration',
            'subject_code' => 'ITEC 55',
            'created_at' => now(),  // Set created_at
            'updated_at' => now(),  // Set updated_at
        ]);
        DB::table('subjects')->insert([ // Change 'classes' to 'subjects'
            'subject_name' => 'Method of Research',
            'subject_code' => 'ITEC 116',
            'created_at' => now(),  // Set created_at
            'updated_at' => now(),  // Set updated_at
        ]);
        DB::table('subjects')->insert([ // Change 'classes' to 'subjects'
            'subject_name' => 'Advance Database',
            'subject_code' => 'DCIT 26',
            'created_at' => now(),  // Set created_at
            'updated_at' => now(),  // Set updated_at
        ]);
    }
}
