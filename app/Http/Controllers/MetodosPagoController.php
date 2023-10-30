<?php

namespace App\Http\Controllers;

use App\Models\MetodoPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MetodosPagoController extends Controller
{
    public function crear(Request $request)
    {
        $validator = validator::make($request->all(), [
            'tipo' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors with a 422 status code (Unprocessable Entity).
        }
        $MetodoPago = new MetodoPago();
        $MetodoPago->tipo = $request->input('tipo');
        $MetodoPago->save();
        return response()->json(['resultado' => 'Todo ok']);
    }

    public function actualizar(Request $request, $id)
    {
        $validator = validator::make($request->all(), [
            'tipo' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors with a 422 status code (Unprocessable Entity).
        }
        $MetodoPago = MetodoPago::find($id);
        $MetodoPago->tipo = $request->input('tipo');
        $MetodoPago->save();
        return response()->json(['resultado' => 'Metodo Pago actualizada con éxito']);
    }
}
