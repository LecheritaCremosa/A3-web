<?php

namespace Database\Seeders;

use App\Models\LearningEnvironment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestLearningEnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $learning_environment = new LearningEnvironment();
        $learning_environment->name = 'Aula 101';
        $learning_environment->capacity = '25';
        $learning_environment->area_mt2 = '40 mt2';
        $learning_environment->floor = '2';
        $learning_environment->inventory = '1 Tablero, 30 PC, 1 Video Beam';
        $learning_environment->type_id = 3;
        $learning_environment->location_id = 1;
        $learning_environment->status = 'ACTIVO';
        $learning_environment->save();

    }
}
