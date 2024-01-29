<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Career;
use App\Models\EnvironmentType;
use App\Models\Instructor;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      /* $this->call(CareerSeeder::class);
       $this->call(CourseSeeder::class);
       $this->call(EnvironmentTypeSeeder::class);
       $this->call(LocationSeeder::class);

        Instructor::factory()->create([
            'type' => 'Contratista',
            'profile' => 'Instructor De Programación']);

        Instructor::factory()->create([
            'type' => 'Contratista',
            'profile' => 'Instructor De Inglés']);

        Instructor::factory()->create([
            'type' => 'Planta',
            'profile' => 'Instructor De TICS']);

        Instructor::factory()->create([
            'type' => 'Planta',
            'profile' => 'Instructor De Matemáticas']);
        Instructor::factory()->create([
            'type' => 'Planta',
            'profile' => 'Instructor De Educación Fisica'
        ]);

        User::factory(5)->create();

        $this->call(TestCareerSeeder::class);*/
    }
}
