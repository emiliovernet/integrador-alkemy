<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    public function crear(Request $request)    
    {
        $validator = validator::make($request->all(), [
            'nombre' => 'required|string|max:100',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors with a 422 status code (Unprocessable Entity).
        }
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->save();
        return response()->json(['resultado' => 'Todo ok']);
    }

    public function actualizar(Request $request, $id)
    {
        $validator = validator::make($request->all(), [
            'nombre' => 'required|string|max:100',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors with a 422 status code (Unprocessable Entity).
        }
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->save();
        return response()->json(['resultado' => 'Categoría actualizada con éxito']);
    }
}
