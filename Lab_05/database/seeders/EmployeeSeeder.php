<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        // Get department IDs for referencing
        $departmentIDs = DB::table('departments')->pluck('departmentID');

        // Define mock data for employees
        $employees = [
            ['name' => 'Awais Saddiqui', 'jobDetail' => 'Software Engineer'],
            ['name' => 'Yaseen Ahmad', 'jobDetail' => 'ML Engineer'],
            ['name' => 'Aimal Khan', 'jobDetail' => 'Professor'],
            ['name' => 'Ali Raza', 'jobDetail' => 'Web Developer'],
            ['name' => 'Saqib Ali', 'jobDetail' => 'Data Scientist'],
            ['name' => 'Professor John Smith', 'jobDetail' => 'Computer Science Professor'],
            ['name' => 'Dr. Emily Johnson', 'jobDetail' => 'Chemistry Researcher'],
            ['name' => 'Associate Professor Maria Garcia', 'jobDetail' => 'Physics Department Head'],
            ['name' => 'Dean Robert Brown', 'jobDetail' => 'College of Engineering Dean'],
            ['name' => 'Assistant Professor David Martinez', 'jobDetail' => 'Mathematics Lecturer'],
            ['name' => 'Researcher Sarah Clark', 'jobDetail' => 'Biology Research Associate'],
            ['name' => 'Professor Michael White', 'jobDetail' => 'English Literature Chair'],
            ['name' => 'Lecturer Jessica Lee', 'jobDetail' => 'Psychology Instructor'],
            ['name' => 'Dean of Students Matthew Thompson', 'jobDetail' => 'Student Affairs Dean'],
            ['name' => 'Assistant Professor Rachel Wilson', 'jobDetail' => 'Sociology Researcher'],
           
            

            
        ];

        // Insert employee data with random department IDs
        foreach ($employees as $employee) {
            $randomDepartmentID = $departmentIDs->random();
            DB::table('employees')->insert([
                'name' => $employee['name'],
                'departmentID' => $randomDepartmentID,
                'jobDetail' => $employee['jobDetail'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
