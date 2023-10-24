<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function saludar() {
        echo "Hola mundo";
    }

    public function despedir(Request $request) {
        echo $request->mensaje;
    }
}
