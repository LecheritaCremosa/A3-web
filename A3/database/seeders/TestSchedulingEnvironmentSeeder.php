<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\LearningEnvironment;
use App\Models\SchedulingEnvironment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSchedulingEnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scheduling_environment = new SchedulingEnvironment();
        $course = Course::find(1);
        $scheduling_environment->course_id = $course->id;
        $instructor = Instructor::find(1);
        $scheduling_environment->instructor_id = $instructor->document;
        $scheduling_environment->date_scheduling = '2024/01/30';
        $scheduling_environment->initial_hour = '7:00';
        $scheduling_environment->final_hour = '12:00';
        $learning_environment = LearningEnvironment::find(1);
        $scheduling_environment->environment_id = $learning_environment->id;
        $scheduling_environment->save();
    
    }
}
