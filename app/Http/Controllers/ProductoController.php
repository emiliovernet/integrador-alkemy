<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    public function crear(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'imagen' => 'required|url|max:255',
            'descripcion' => 'required|string|max:255',
            'categoria_id' => 'required|integer',
            'habilitado' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Devolver errores de validación con un código de estado 422 (Entidad no procesable).
        }
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->imagen = $request->input('imagen');
        $producto->descripcion = $request->input('descripcion');
        $producto->categoria_id = $request->input('categoria_id');
        $producto->habilitado = $request->input('habilitado');
        $producto->save();
        return response()->created($producto);
    }

    public function actualizar(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'string|max:255',
            'precio' => 'numeric|min:0',
            'imagen' => 'url|max:255',
            'descripcion' => 'string|max:255',
            'categoria_id' => 'integer',
            'habilitado' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Devolver errores de validación con un código de estado 422 (Entidad no procesable).
        }
        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->descripcion = $request->input('descripcion');
        $producto->categoria_id = $request->input('categoria_id');
        $producto->save();
        return response()->ok($producto, $message = 'Producto actualizada con éxito.');
    }

    public function eliminar(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->habilitado = false;
        $producto->save();
        return response()->ok($meesage = "Producto $producto->id Eliminado con éxito.");
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
