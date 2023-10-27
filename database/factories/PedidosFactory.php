<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pedido;
// use App\Models\Producto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedidos>
 */
class PedidosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $productos = Producto::all('id')->toArray();

        return [
            // 'procucto_id' => fake()->randomElement($productos),
            'cantidad'=> fake()->randomNumber(3, false),
            'importe' => fake()->randomFloat(),
        ];
    }
}
