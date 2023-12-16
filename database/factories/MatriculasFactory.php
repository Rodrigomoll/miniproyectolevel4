<?php

namespace Database\Factories;

use App\Models\alumnos;
use App\Models\cursos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\matriculas>
 */
class MatriculasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $alumnoId = alumnos::inRandomOrder()->first()->id;
        $cursoId = cursos::inRandomOrder()->first()->id;
        
        return [
            'id_alumno' => $alumnoId,
            'id_curso' => $cursoId,
        ];
    }
}
