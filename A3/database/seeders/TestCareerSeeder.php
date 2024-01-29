<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestCareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $career = Career::find(1);
        $career->name = 'Auxiliar De Enfermeria';
        $career->type = 'Tecnico';
        $career->save();
    }
}
