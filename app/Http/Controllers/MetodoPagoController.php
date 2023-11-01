<?php

namespace App\Http\Controllers;

use App\Models\MetodoPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MetodoPagoController extends Controller
{
    public function crear(Request $request)
    {

        $validator = validator::make($request->all(), [
            'tipo' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors with a 422 status code (Unprocessable Entity).
        }
        $metodo_pago = new MetodoPago();
        $metodo_pago->tipo = $request->input('tipo');
        $metodo_pago->save();
        return response()->created($metodo_pago);
    }

    public function actualizar(Request $request, $id)
    {

        $validator = validator::make($request->all(), [
            'tipo' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors with a 422 status code (Unprocessable Entity).
        }
        $metodo_pago = MetodoPago::find($id);
        $metodo_pago->tipo = $request->input('tipo');
        $metodo_pago->save();
        return response()->ok($metodo_pago, $message = 'Método de pago actualizada con éxito.');
    }

    public function listar()
    {
        $metodos_pago = MetodoPago::all();
        return response()->ok($metodos_pago);
    }
}
