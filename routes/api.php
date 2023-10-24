<?php
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\OrdenesController;
use App\Http\Controllers\PruebaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/saludo', [PruebaController::class, 'saludar']
// );

// // Route::post('/despedida', [PruebaController::class, 'saludar']
// // );

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


