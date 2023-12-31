<?php

namespace Database\Factories;


use App\Models\Usuario;
use App\Models\Carrito;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrito>
 */
class CarritoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $usuarios = Usuario::all()->pluck('id')->toArray();

        return [
            'usuario_id' => fake()->randomElement($usuarios),
            'importe'=> fake()->randomFloat(2, 0, 1000000),
            'fecha_creacion' => fake()->dateTime()
        ];
    }
}
