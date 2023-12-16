<?php

namespace Database\Seeders;

use App\Models\asistencias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsistenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        asistencias::factory(10)->create();
    }
}
