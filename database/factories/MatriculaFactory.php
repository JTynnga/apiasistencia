<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matricula>
 */
class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'curso_id' => fake()->randomElement($array = array(1, 2, 3, 4, 5, 6, 7, 9, 10)),
            'alumno_id' => fake()->randomElement($array = array(1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20)),
            'asistencia' => fake()->randomElement($array = array('A', 'T', 'F')),
        ];
    }
}
