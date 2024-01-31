<?php

namespace Database\Seeders;

use App\Models\EnvironmentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestEnvironmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $enviroment_type = new EnvironmentType();
      $enviroment_type->description = 'Aula';
      $enviroment_type->save();
    }
}
