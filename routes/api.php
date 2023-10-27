<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MetodosPagoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\OrdenesController;


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
Route::post('/metodospago', [MetodosPagoController::class, 'crear']);
Route::put('/metodospago/{id}', [MetodosPagoController::class, 'actualizar']);

// RUTAS CARRITO DE COMRAS
Route::get('/carrito', [CarritoController::class, 'index']);
Route::post('/carrito/agregar', [CarritoController::class, 'agregarProducto']);
Route::put('/carrito/actualizar/{idProducto}', [CarritoController::class, 'actualizarProducto']);
Route::delete('/carrito/eliminar/{idProducto}', [CarritoController::class, 'eliminarProducto']);
Route::get('/carrito/listar/{idCarrito}', [CarritoController::class, 'lista']);
Route::get('/carrito/resumir/{idCarrito}', [CarritoController::class, 'resumen']);
Route::delete('/carrito/limpiar/{idCarrito]', [CarritoController::class, 'limpiar']);
Route::get('/carrito/finalizar/{idCarrito}', [CarritoController::class, 'finalizarCarrito']);

// RUTAS ORDEN DE COMPRA
Route::post('/ordenes/crear', [OrdenesController::class, 'crearOrden']);
