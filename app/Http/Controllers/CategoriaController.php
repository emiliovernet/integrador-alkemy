<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function crear(Request $request)
    {
        echo "Se Creo una categoria";
    }

    public function actualizar(Request $request, $id)
    {
        echo "Se ACTUALIZO una categoria " .$id;
    }
}
