<?php

namespace App\Http\Controllers;
use App\Models\Pqrs;
use Illuminate\Http\Request;

class pqrscontroller extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nombre'=> 'required |string|max:100',
            'apeliidos'=> 'required |string|max:100',
            'correo'=> 'required |email',
            'tipo'=> 'required|in:Queja,peticion,felicitacion',
            'mensaje'=> 'required|string',
            'acepto'=>'aceepted'

        ]);
        Pqrs::create([
            'nombres'=>$request->nombres,
            'apellidos'=>$request->apellidos,
            'correos'=>$request->correos,
            'tipo'=>$request->tipo,
            'mensaje'=>$request->mensaje,
            'acepto'=>$request->has('acepto'),
        ]);
        return redirect()->route('nosotros')->whith('socces','Mensaje enviado correctamente');
    }
}

