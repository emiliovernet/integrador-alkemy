<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function crear(Request $request)
    {
        $Producto = new Producto();
        $Producto->nombre = $request->input('nombre');
        $Producto->precio = $request->input('precio');
        $Producto->imagen = $request->input('imagen');
        $Producto->descripcion= $request->input('descripcion');
        $Producto->categoria_id = $request->input('categoria_id');
        $Producto->habilitado = $request->input('habilitado');
        $Producto->save();
        return response()->json(['resultado' => 'Todo ok']);
    }

    public function actualizar(Request $request, $id)
    {
        $Producto = Producto::find($id);
        $Producto->nombre = $request->input('nombre');
        $Producto->precio = $request->input('precio');
        $Producto->descripcion = $request->input('descripcion');
        $Producto->categoria_id = $request->input('categoria_id');        
        $Producto->save();
        return response()->json(['resultado' => 'Producto actualizada con éxito']);
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
