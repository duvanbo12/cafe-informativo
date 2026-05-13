@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')
<h2 class="text-center mb-4" style="color: #fcf3ee; font-family: 'Cormorant Garamond', serif; font-style: italic;">
    Mensajes recibidos
</h2>

<div class="table-responsive">
    <table id="tablaMensajes"class="table table-bordered table-striped" style="background: rgba(255,248,240,0.92);">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Tipo</th>
                <th>Mensaje</th>
                <th>Acciones</th>
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
                <td>
                    <a href="{{ route('mensajes.edit', $mensaje->id) }}"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <form action="{{ route('mensajes.destroy', $mensaje->id) }}"
                          method="POST"
                          style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Eliminar mensaje?')">
                            Eliminar
                        </button>
                    </form>
                </td>
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