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
        return response()->json(['Usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ver(string $id)
    {
        $usuarios = Usuario::find($id);
        return response()->json(['Usuarios' => $usuarios]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function actulizar(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->input('nombre');
        $usuario->telefono = $request->input('telefono');
        $usuario->save();
        return response()->json(['resultado' => 'Usuario actualizada con éxito']);
    }
}
