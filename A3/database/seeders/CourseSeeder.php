<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::insert([
            ['code' => '2771230', 'shift' => 'DIURNA', 'career_id' => '1', 'initial_date' => '15/08/2023', 'final_date' => '4/10/2024', 'status' => 'LECTIVA'],
            ['code' => '2339817', 'shift' => 'MIXTA', 'career_id' => '2', 'initial_date' => '15/01/2022', 'final_date' => '15/06/2023', 'status' => 'PRODUCTIVA'],
            ['code' => '1838890', 'shift' => 'NOCTURNA', 'career_id' => '3', 'initial_date' => '20/01/2024', 'final_date' => '20/06/2025', 'status' => 'INDUCCIÓN']
        ]);
    }
}
