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
        $career = new Career();
        $career->name = 'AUXILIAR DE ENFERMERIA';
        $career->type = 'TÉCNICO';
        $career->save();
    }
}
