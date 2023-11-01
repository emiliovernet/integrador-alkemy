<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listar()
    {
        $usuarios = Usuario::all();
        return response()->ok($usuarios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ver(string $id)
    {
        $usuario = Usuario::find($id);
        return response()->ok($usuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function actualizar(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->input('nombre');
        $usuario->telefono = $request->input('telefono');
        $usuario->save();
        return response()->ok($message='Usuario actualizado con éxito');
    }
}
