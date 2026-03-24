<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginacontroller extends Controller
{
    public function inicio()
    {
    return View('inicio');
    }

    public function contacto()
    {
    return View('contacto');
    }
    
    public function mensaje()
    {
    return View('mensaje');
    }
    public function nosotros()
    {
    return View('nosotros');
    }
    public function menu()
    {
    return View('menu');
    }
}
