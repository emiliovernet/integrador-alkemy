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
        return response()->json(['resultado' => 'Usuario actualizada con éxito', $usuario]);
    }
}
