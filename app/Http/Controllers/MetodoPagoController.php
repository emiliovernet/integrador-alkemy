<?php

namespace App\Http\Controllers;

use App\Models\MetodoPago;
use Illuminate\Http\Request;

class MetodoPagoController extends Controller
{
    public function crear(Request $request)
    {
        $metodo_pago = new MetodoPago();
        $metodo_pago->tipo = $request->input('tipo');
        $metodo_pago->save();
        return response()->created($metodo_pago);
    }

    public function actualizar(Request $request, $id)
    {
        $metodo_pago = MetodoPago::find($id);
        $metodo_pago->tipo = $request->input('tipo');
        $metodo_pago->save();
        return response()->ok($metodo_pago, $message='Metodo de pago actualizada con éxito.');
    }

    public function listar()
    {
        $metodos_pago = MetodoPago::all();
        return response()->ok($metodos_pago);
    }
}
