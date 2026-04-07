@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')
<h2 class="text-center mb-4" style="color: #fcf3ee; font-family: 'Cormorant Garamond', serif; font-style: italic;">
    Mensajes recibidos
</h2>

<div class="table-responsive">
    <table class="table table-bordered table-striped" style="background: rgba(255,248,240,0.92);">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Tipo</th>
                <th>Mensaje</th>
                <th>Acepto</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mensajes as $mensaje)
            <tr>
                <td>{{ $mensaje->id }}</td>
                <td>{{ $mensaje->nombres }}</td>
                <td>{{ $mensaje->apellidos }}</td>
                <td>{{ $mensaje->correos }}</td>
                <td>{{ $mensaje->tipo }}</td>
                <td>{{ $mensaje->mensaje }}</td>
                <td>{{ $mensaje->acepto ? 'Sí' : 'No' }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center text-muted">No hay mensajes registrados.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection