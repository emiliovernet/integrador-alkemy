<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\MetodoPago;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MetodosPago>
 */
class MetodoPagoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = MetodoPago::class;

    public function definition(): array
    {
        return [
            'tipo' => $this->faker->word,
        ];
    }
}
