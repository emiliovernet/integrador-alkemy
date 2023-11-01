<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener una lista de pedidos
        $pedidos = Pedido::all();

        return response()->ok($pedidos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $pedido = Pedido::create($request->all());

        return response()->created($pedido);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        // Mostrar un Pedido específico
        return response()->ok($pedido);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {


        $pedido->update($request->all());
        $pedido = Pedido::find($pedido->id);

        return response()->ok($pedido, $message= 'Pedido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        $pedidoId = $pedido->id;
        // Eliminar el Pedido
        $pedido->delete();

        return response()->ok($message= "El Pedido $pedidoId ha sido eliminado");
    }
}
