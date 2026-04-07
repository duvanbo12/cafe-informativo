<?php

namespace App\Http\Controllers;
use App\Models\Pqrs;
use Illuminate\Http\Request;

class PqrsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombres'  => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'correos'  => 'required|email',
            'tipo'     => 'required|in:Queja,Petición,Felicitación',
            'mensaje'  => 'required|string',
            'acepto'   => 'accepted',
        ]);

        Pqrs::create([
            'nombres'   => $request->nombres,
            'apellidos' => $request->apellidos,
            'correos'   => $request->correos,
            'tipo'      => $request->tipo,
            'mensaje'   => $request->mensaje,
            'acepto'    => $request->has('acepto'),
        ]);

        return redirect()->route('nosotros')->with('success', 'Mensaje enviado correctamente');
    }

    public function index()
    {
        $mensajes = pqrs::orderBy('id', 'desc')->get();
        return view('mensaje', compact('mensajes'));
    }
}