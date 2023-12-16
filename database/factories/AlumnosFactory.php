<?php

namespace Database\Factories;

use App\Models\cursos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alumnos>
 */
class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres' => fake()->name(),
            'apellidos' => fake()->lastName(),
            'edad' => fake()->numberBetween(18, 65),
            'direccion' => fake()->address(),
        ];
    }
}
