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

        return response()->ok($stocks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $stock = Stock::create($request->all());

        return response()->created($stock);
    }

    /**
     * Display the specified resource.
     */
    public function show(Stock $stock)
    {
        // Mostrar un carrito específico
        return response()->ok($stock);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stock $stock)
    {


        $stock->update($request->all());
        $stock = Stock::find($stock->id);

        return response()->ok($stock, $message="Stock actualizado con éxito");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stock)
    {
        $stockId = $stock->id;
        // Eliminar el carrito
        $stock->delete();

        return response()->ok($message="El stock $stockId ha sido eliminado");
    }
}