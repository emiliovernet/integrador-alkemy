<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index()
    {
        // Aquí mostrarías el contenido del carrito.
    }

    public function agregarProducto(Request $request)
    {
        // Agregar un producto al carrito.
    }

    public function actualizarProducto(Request $request)
    {
        // Actualizar la cantidad de un producto en el carrito.
    }

    public function eliminarProducto(Request $request)
    {
        // Eliminar un producto del carrito.
    }

    public function lista()
    {
        // Listar los productos del carrito
    }

    public function resumen()
    {
        // Mostrar el resumen del carrito
    }

    public function limpiar()
    {
        // Limpiar el carrito (eliminar todos los productos).
    }
}
