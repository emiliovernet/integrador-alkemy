<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener una lista de carritos
        $carritos = Carrito::all();

        return response()->json($carritos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $carrito = Carrito::create($request->all());

        return response()->json($carrito, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrito $carrito)
    {
        // Mostrar un carrito específico
        return response()->json($carrito);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrito $carrito)
    {


        $carrito->update($request->all());
        $carrito = Carrito::find($carrito->id);

        return response()->json($carrito, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrito $carrito)
    {
        $carritoId = $carrito->id;
        // Eliminar el carrito
        $carrito->delete();

        return response()->json("El carrito $carritoId ha sido eliminado");
    }
}