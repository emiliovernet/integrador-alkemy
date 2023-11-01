<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'nombre' => 'string|max:100',
            'email' => 'email|unique:usuarios',
            'contrasena' => 'min:8',
            'telefono' => 'nullable|string|max:30',
            'domicilio' => 'string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->input('nombre');
        $usuario->telefono = $request->input('telefono');
        $usuario->save();
        return response()->ok($message = 'Usuario actualizado con éxito');
    }
}
