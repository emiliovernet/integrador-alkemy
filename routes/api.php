<?php

use App\Http\Controllers\PruebaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MetodosPagoController;
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

Route::get('/usuario', [UsuarioController::class, 'listar']);
Route::get('/usuario/{id}', [UsuarioController::class, 'ver']);
Route::put('/usuario/{id}', [UsuarioController::class, 'actulizar']);

Route::post('/categoria', [CategoriaController::class, 'crear']);
Route::put('/categoria/{id}', [CategoriaController::class, 'actualizar']);

Route::post('/producto', [ProductoController::class, 'crear']);
Route::put('/producto/{id}', [ProductoController::class, 'actualizar']);
Route::delete('/producto/{id}', [ProductoController::class, 'eliminar']);
Route::get('/producto/{id}', [ProductoController::class, 'ver']);

Route::post('/metodospago', [MetodosPagoController::class, 'crear']);
Route::put('/metodospago/{id}', [MetodosPagoController::class, 'actualizar']);