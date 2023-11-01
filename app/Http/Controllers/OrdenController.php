<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener una lista de ordenes
        $ordenes = Orden::all();

        return response()->ok($ordenes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $orden = Orden::create($request->all());

        return response()->created($orden);
    }

    /**
     * Display the specified resource.
     */
    public function show(Orden $orden)
    {
        // Mostrar un carrito específico
        return response()->ok($orden);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orden $orden)
    {


        $orden->update($request->all());
        $orden = Orden::find($orden->id);

        return response()->ok($orden, $mesage='La orden ha sido actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orden $orden)
    {
        $ordenId = $orden->id;
        // Eliminar el carrito
        $orden->delete();

        return response()->ok($message="La orden $ordenId ha sido eliminada");
    }
}