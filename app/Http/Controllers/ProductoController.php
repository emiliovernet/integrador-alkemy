<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function crear(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->imagen = $request->input('imagen');
        $producto->descripcion= $request->input('descripcion');
        $producto->categoria_id = $request->input('categoria_id');
        $producto->habilitado = $request->input('habilitado');
        $producto->save();
        return response()->created($producto);
    }

    public function actualizar(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->descripcion = $request->input('descripcion');
        $producto->categoria_id = $request->input('categoria_id');        
        $producto->save();
        return response()->ok($producto, $message='Producto actualizada con éxito.');
    }

    public function eliminar(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->habilitado = false;        
        $producto->save();
        return response()->ok($meesage="Producto $producto->id Eliminado con éxito.");
    }

    public function ver(Request $request, $id)
    {
        $producto = Producto::find($id);
        return response()->ok($producto);
    }

    public function listar()
    {
        $productos = Producto::all();
        return response()->ok($productos);
    }
}
