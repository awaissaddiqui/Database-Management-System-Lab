<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        // Insert department values
        DB::table('departments')->insert([
            ['name' => 'Computer System Engineering'],
            ['name' => 'Information Technology'],
            ['name' => 'Software Engineering'],
            ['name' => 'Computer Science'],
            ['name' => 'Electrical Engineering'],
            ['name' => 'Mechanical Engineering'],
            ['name' => 'Civil Engineering'],
            ['name' => 'Chemical Engineering'],
            ['name' => 'Biomedical Engineering'],
            ['name' => 'Aerospace Engineering'],
            ['name' => 'Agriculture Department'],

            'created_at' => now(),
            'updated_at' => now(),
            
            // Add more departments as needed
        ]);
    }
}
