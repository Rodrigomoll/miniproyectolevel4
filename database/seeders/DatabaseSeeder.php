<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\docentes;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $docentesSeeder = new DocentesSeeder();
        $docentesSeeder -> run();
        $cursosSeeder = new CursosSeeder();
        $cursosSeeder -> run();
        $alumnosSeeder = new AlumnosSeeder();
        $alumnosSeeder -> run();
        $matriculasSeeder = new MatriculasSeeder();
        $matriculasSeeder -> run();
        $asistenciasSeeder = new AsistenciasSeeder();
        $asistenciasSeeder -> run();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
