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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::post('/login', [AuthController::class, 'auth']);


// RUTAS USUARIO

Route::get('/usuario', [UsuarioController::class, 'listar']);
Route::get('/usuario/{id}', [UsuarioController::class, 'ver']);
Route::put('/usuario/{id}', [UsuarioController::class, 'actulizar']);

// RUTAS CATEGORIA
Route::post('/categoria', [CategoriaController::class, 'crear']);
Route::put('/categoria/{id}', [CategoriaController::class, 'actualizar']);

// RUTAS PRODUCTO
Route::post('/producto', [ProductoController::class, 'crear']);
Route::put('/producto/{id}', [ProductoController::class, 'actualizar']);
Route::delete('/producto/{id}', [ProductoController::class, 'eliminar']);
Route::get('/producto/{id}', [ProductoController::class, 'ver']);

// RUTAS METODO DE PAGO
Route::post('/metodospago', [MetodoPagoController::class, 'crear']);
Route::post('/metodospago', [MetodoPagoController::class, 'actualizar']);

// // RUTAS CARRITO DE COMRAS
Route::apiResource('carrito', CarritoController::class);

// RUTAS PEDIDOS
Route::apiResource('pedido', PedidoController::class);

// RUTAS ORDEN DE COMPRA
Route::apiResource('orden', OrdenController::class);

// RUTAS STOCK
Route::apiResource('stock', StockController::class);