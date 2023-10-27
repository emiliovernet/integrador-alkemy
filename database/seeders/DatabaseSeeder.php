<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carrito;
use App\Models\Pedido;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // \App\Models\::factory()->create([
        //     '' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Carrito::factory(3)->create();
        Pedido::factory(3)->create();
    }
}
