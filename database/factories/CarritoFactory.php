<?php

namespace Database\Factories;


use App\Models\User;
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

        $usuarios = User::all('id')->toArray();

        return [
            'user_id' => fake()->randomElement($usuarios),
            'importe'=> fake()->randomFloat(),
            'fecha_creacion' => fake()->dateTime()
        ];
    }
}
