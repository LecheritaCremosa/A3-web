<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $location = new Location();
        $location->name = 'BICENTENARIO';
        $location->address = 'Cra. 22 # 23-19';
        $location->status = 'ACTIVO';
        $location->save();
    }
}
