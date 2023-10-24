<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listar()
    {
        return response()->json(['mensaje' => 'Usuario Index']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ver(string $id)
    {
        echo "ver el usuario con id " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function actulizar(Request $request, $id)
    {
        echo "Se actualizo el usuario con el id: " . $request->id;
    }
}
