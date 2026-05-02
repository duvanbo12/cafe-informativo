@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-center">Bienvenido al Dashboard</h1>

    <p class="text-center">
        Solo los usuarios autenticados pueden ver esta página.
    </p>

    <div class="text-center">
        <a href="{{ route('mensajes') }}" class="btn btn-primary">
            Ver mensajes PQRS
        </a>
    </div>
@endsection
