<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function crear(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->save();
        return response()->created($categoria);
    }

    public function actualizar(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->save();
        return response()->ok($categoria, $message='Categoría actualizada con éxito');
    }

    public function listar()
    {
        $categorias = Categoria::all();
        return response()->ok($categorias);
    }
}
