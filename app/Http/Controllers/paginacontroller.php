<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pqrs;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function contacto()
    {
        return view('contacto');
    }


    public function nosotros()
    {
        return view('nosotros');
    }

    public function menu()
    {
        return view('menu');
    }
}