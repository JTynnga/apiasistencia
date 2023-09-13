<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre1' => fake()->firstName(),
            'nombre2' => fake()->firstName(),
            'apellido_pat' => fake()->lastName(),
            'apellido_mat' => fake()->lastName(),
            'fecha_creacion' => fake()->date(),
            'fecha_edicion' => fake()->date(),
            'usuario_creacion' => fake()->lastName(),
            'usuario_edicion' => fake()->lastName(),
            'estado' => 1,
            //            'email' => fake()->unique()->safeEmail(),
            //            'telefono' => fake()->phoneNumber(),
        ];
    }
}
