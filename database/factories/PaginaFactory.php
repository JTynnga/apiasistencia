<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PaginaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'url' => fake()->url(),
            'descri'  => fake()->text(30),
            'nombre'  => fake()->text(30),
            'icono' => fake()->randomElement($array = array('icon1', 'icon2', 'icon3')),
            'tipo' => fake()->randomElement($array = array('blogs', 'corporativos', 'educativos', 'gubernamentales', 'redes sociales', 'prensa')),
            'estado' => 1,
            'fecha_creacion' => fake()->date(),
            'fecha_edicion' => null,
            'usuario_creacion' => fake()->email(),
            'usuario_edicion' =>  fake()->email(),
        ];
    }
}
