<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener una lista de stocks
        $stocks = Stock::all();

        return response()->json($stocks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $stock = Stock::create($request->all());

        return response()->json($stock, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Stock $stock)
    {
        // Mostrar un carrito específico
        return response()->json($stock);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stock $stock)
    {


        $stock->update($request->all());
        $stock = Stock::find($stock->id);

        return response()->json($stock, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stock)
    {
        $stockId = $stock->id;
        // Eliminar el carrito
        $stock->delete();

        return response()->json("El stock $stockId ha sido eliminado");
    }
}