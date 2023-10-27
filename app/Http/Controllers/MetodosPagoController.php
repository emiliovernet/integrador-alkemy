<?php

namespace App\Http\Controllers;

use App\Models\MetodoPago;
use Illuminate\Http\Request;

class MetodosPagoController extends Controller
{
    public function crear(Request $request)
    {
        $MetodoPago = new MetodoPago();
        $MetodoPago->tipo = $request->input('tipo');
        $MetodoPago->save();
        return response()->json(['resultado' => 'Todo ok']);
    }

    public function actualizar(Request $request, $id)
    {
        $MetodoPago = MetodoPago::find($id);
        $MetodoPago->tipo = $request->input('tipo');
        $MetodoPago->save();
        return response()->json(['resultado' => 'Metodo Pago actualizada con éxito']);
    }
}
