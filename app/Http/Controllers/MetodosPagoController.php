<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetodosPagoController extends Controller
{
    public function crear(Request $request)
    {
        echo "Se CREO una Metodo Pago";
    }

    public function actualizar(Request $request, $id)
    {
        echo "Se ACTUALIZO una Metodo Pago " .$id;
    }
}
