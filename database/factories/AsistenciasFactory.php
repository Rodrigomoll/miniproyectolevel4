<?php

namespace Database\Factories;

use App\Models\matriculas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\asistencias>
 */
class AsistenciasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $matriculaId = matriculas::inRandomOrder()->first()->id;
        return [
            'id_matricula' => $matriculaId,
            'fecha' => fake()->date(),
            'estado' => fake()->randomElement(['A','T','F']),
        ];
    }
}
