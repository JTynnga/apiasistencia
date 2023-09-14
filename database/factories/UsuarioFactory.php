<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha' => fake()->date(),
            'id_persona' => fake()->randomElement($array = array(1, 2, 3, 4, 5, 6, 7, 9, 10)),
            'clave' => fake()->randomElement($array = array('funval', 'admin', '1234567')),
            'usuario' => fake()->unique()->safeEmail(),
            'estado' => 1,
            'id_rol' => fake()->randomElement($array = array(1, 2, 3)),
            'fecha_creacion' => fake()->date(),
            'fecha_edicion' => null,
            'usuario_creacion' => fake()->safeEmail(),
            'usuario_edicion' => fake()->safeEmail(),
        ];
    }
}
