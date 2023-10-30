<?php

namespace Database\Factories;

use App\Models\Carrito;
use App\Models\MetodoPago;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orden>
 */
class OrdenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $carritos = Carrito::all()->pluck('id')->toArray();
        $metodos_pago = MetodoPago::all()->pluck('id')->toArray();

        return [
            'carrito_id' => fake()->randomElement($carritos),
            'metodo_pago_id' => fake()->randomElement($metodos_pago),
            'fecha_creacion' => fake()->dateTime()
        ];
    }
}
