<?php

namespace Database\Factories;


use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrito>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $carritos = Carrito::all()->pluck('id')->toArray();
        $productos = Producto::all()->pluck('id')->toArray();

        return [
            'carrito_id' => fake()->randomElement($carritos),
            'producto_id' => fake()->randomElement($productos),
            'cantidad'=> fake()->randomNumber(3, false),
            'importe'=> fake()->randomFloat(2, 0, 1000000),
            
        ];
    }
}
