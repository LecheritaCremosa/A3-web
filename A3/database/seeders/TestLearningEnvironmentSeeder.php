<?php

namespace Database\Seeders;

use App\Models\EnvironmentType;
use App\Models\LearningEnvironment;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestLearningEnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $learning_enviroment = new LearningEnvironment();
        $learning_enviroment ->name = 'Aula 101';
        $learning_enviroment->capacity = '25';
        $learning_enviroment->area_mt2 = '40 mt2';
        $learning_enviroment->floor = '2';
        $learning_enviroment->inventory = '1 tablero, 30 pc, 1 video beam';
    
        $enviroment_type = EnvironmentType::find(1);
        $location = Location::find(1);
        $learning_enviroment->status = 'ACTIVO'; 
    
    
    
    }
}
