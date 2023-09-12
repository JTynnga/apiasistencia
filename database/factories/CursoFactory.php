<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descri' => fake()->randomElement($array = array('PHP', 'Laravel', 'Tailwind', 'React', 'HTML', 'BootStrap', 'NextJS', 'mysql', 'Angular', 'JavaScript', 'SCRUM', 'Instituto')),
            'docente_id' => fake()->randomElement($array = array(1, 2, 3, 4, 5, 6, 7, 9, 10)),
            'estado' => 1,
        ];
    }
}
