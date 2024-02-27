<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = new Course();
        $course->code = 2772650;
        $course->shift = 'NOCTURNA';
        $course->career_id = 1;
        $course->initial_date = '2024/01/22';
        $course->final_date = '2025/06/29';
        $course->status = 'INDUCCIÓN';
        $course->save();
    }
}
