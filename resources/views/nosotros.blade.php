@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')

<h2 class="text-center mb-4">Sobre Nosotros</h2>

<p class="text-center">
    Somos una empresa comprometida con la calidad y el servicio.
</p>

<hr class="my-5">

<h3 class="text-center mb-4">Formulario de PQRS</h3>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow p-4">

            <form>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Nombres</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Apellidos</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label>Correo electrónico</label>
                    <input type="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Tipo de solicitud</label>
                    <select class="form-select">
                        <option>Queja</option>
                        <option>Petición</option>
                        <option>Felicitación</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label>Mensaje</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        Acepto términos y condiciones
                    </label>
                </div>

                <button type="button" class="btn btn-dark w-100">
                    Enviar
                </button>

            </form>

            <small class="text-muted">
                Este formulario es únicamente informativo.
            </small>

        </div>
    </div>
</div>

@endsection

