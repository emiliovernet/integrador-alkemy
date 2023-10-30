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
        $Producto = new Producto();
        $Producto->nombre = $request->input('nombre');
        $Producto->precio = $request->input('precio');
        $Producto->imagen = $request->input('imagen');
        $Producto->descripcion= $request->input('descripcion');
        $Producto->categoria_id = $request->input('categoria_id');
        $Producto->habilitado = $request->input('habilitado');
        $Producto->save();
        return response()->json(['resultado' => 'Todo ok', $Producto]);
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
        $Producto = Producto::find($id);
        $Producto->nombre = $request->input('nombre');
        $Producto->precio = $request->input('precio');
        $Producto->descripcion = $request->input('descripcion');
        $Producto->categoria_id = $request->input('categoria_id');        
        $Producto->save();
        return response()->json(['resultado' => 'Todo ok', $Producto]);
    }

    public function eliminar(Request $request, $id)
    {
        $Producto = Producto::find($id);
        $Producto->habilitado = false;        
        $Producto->save();
        return response()->json(['resultado' => 'Producto Eliminado con éxito']);
    }

    public function ver(Request $request, $id)
    {
        $producto = Producto::find($id);
        return response()->json(['Producto' => $producto]);
    }
}
