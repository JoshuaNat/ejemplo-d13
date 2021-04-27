<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function bienvenida($nombre = 'Viajero', $apellido = null)
    {
        //dd($nombre);
        $nombreMayusculas = strtoupper($nombre);
        return view('inicio/bienvenida', compact('nombre', 'apellido'))->with(['nombreM' => $nombreMayusculas]);
    }

    public function contacto()
    {
        return view('inicio.contacto');
    }
}
