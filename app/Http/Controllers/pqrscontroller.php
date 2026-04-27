<?php

namespace App\Http\Controllers;
use App\Models\Pqrs;
use Illuminate\Http\Request;

class PqrsController extends Controller
{
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'nombres'   => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'correos'   => 'required|email',
            'tipo'      => 'required|in:Queja,Petición,Felicitación',
            'mensaje'   => 'required|string',
            'acepto'    => 'accepted',
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
        $mensajes = Pqrs::orderBy('id', 'desc')->get();
        return view('mensaje', compact('mensajes'));
    }

    public function edit($id)
    {
        $mensaje = Pqrs::findOrFail($id);
        return view('editar_mensaje', compact('mensaje'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres'   => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'correos'   => 'required|email',
            'tipo'      => 'required|in:Queja,Petición,Felicitación',
            'mensaje'   => 'required|string',
        ]);

        $mensaje = Pqrs::findOrFail($id);  // ✅ findOrFail correcto

        $mensaje->update([                  // ✅ -> en vez de ::
            'nombres'   => $request->nombres,
            'apellidos' => $request->apellidos,
            'correos'   => $request->correos,
            'tipo'      => $request->tipo,
            'mensaje'   => $request->mensaje,
            'acepto'    => $request->has('acepto'),
        ]);

        return redirect()->route('mensaje')->with('success', 'Actualizado correctamente');
    }

    public function destroy($id)
    {
        $mensaje = Pqrs::findOrFail($id);
        $mensaje->delete();

        return redirect()->route('mensaje')->with('success', 'Mensaje eliminado correctamente');
    }
}