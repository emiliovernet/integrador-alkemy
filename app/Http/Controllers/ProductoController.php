<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function crear(Request $request)
    {
        echo "Se Creo un PRODUCTO";
    }

    public function actualizar(Request $request, $id)
    {
        echo "Se ACTUALIZO un PRODUCTO " . $id;
    }

    public function eliminar(Request $request, $id)
    {
        echo "Eliminar un PRODUCTO con id: " . $id;
    }

    public function ver(Request $request, $id)
    {
        echo "Ver un PRODUCTO " . $id;
    }
}
