<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MetodosPagoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\MetodoPagoController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\OrdenesController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\StockController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::prefix('v1')->group(function () {

    Route::middleware(['api', 'auth:api'])->group(function () {
        Route::prefix('auth')->group(function () {
            
    // RUTAS LOGIN Y REGISTRO
            Route::post('login', [AuthController::class, 'login'])->name('login')->withoutMiddleware(['auth:api']);
            Route::post('registro', [AuthController::class, 'registrar'])->name('auth.registro')->withoutMiddleware(['auth:api']);
            Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        });

        // RUTAS USUARIO
        Route::get('/usuarios', [UsuarioController::class, 'listar']);
        Route::get('/usuarios/{id}', [UsuarioController::class, 'ver']);
        Route::put('/usuarios/{id}', [UsuarioController::class, 'actualizar']);
        
        // RUTAS CATEGORIA
        Route::post('/categorias', [CategoriaController::class, 'crear']);
        Route::put('/categorias/{id}', [CategoriaController::class, 'actualizar']);
        Route::get('/categorias', [CategoriaController::class, 'listar']);
        
        // RUTAS PRODUCTO
        Route::post('/productos', [ProductoController::class, 'crear']);
        Route::put('/productos/{id}', [ProductoController::class, 'actualizar']);
        Route::delete('/productos/{id}', [ProductoController::class, 'eliminar']);
        Route::get('/productos/{id}', [ProductoController::class, 'ver']);
        Route::get('/productos', [ProductoController::class, 'listar']);
        
        // RUTAS METODO DE PAGO
        Route::post('/metodo_pagos', [MetodoPagoController::class, 'crear']);
        Route::post('/metodo_pagos', [MetodoPagoController::class, 'actualizar']);
        Route::get('/metodo_pagos', [MetodoPagoController::class, 'listar']);
        
        // // RUTAS CARRITO DE COMRAS
        Route::apiResource('carritos', CarritoController::class);
        
        // RUTAS PEDIDOS
        Route::apiResource('pedidos', PedidoController::class);
        
        // RUTAS ORDEN DE COMPRA
        Route::apiResource('ordenes', OrdenController::class);
        
        // RUTAS STOCK
        Route::apiResource('stocks', StockController::class);
    });

});
