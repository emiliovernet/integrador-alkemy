<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\::factory()->create([
        //     '' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Categoria::factory(5)->create();
        \App\Models\MetodoPago::factory(5)->create();
        \App\Models\Producto::factory(5)->create();
        \App\Models\Usuario::factory(5)->create();
        \App\Models\Carrito::factory(5)->create();
        \App\Models\Pedido::factory(5)->create();
        \App\Models\Orden::factory(5)->create();
         
        //\App\Models\UsuarioLT::factory(5)->create();
        
    }
}
