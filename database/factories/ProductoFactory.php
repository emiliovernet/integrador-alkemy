<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Producto;
use App\Models\Categoria;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $categorias = Categoria::all()->pluck('id')->toArray();

        return [
            'nombre' => $this->faker->word,
            'precio' => $this->faker->randomFloat(2, 10, 1000), 
            'descripcion' => $this->faker->text(100),
            'categoria_id' => fake()->randomElement($categorias),
            'habilitado' => $this->faker->boolean(90),
        ];
    }
}
