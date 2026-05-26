@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container my-5">
    
    <div class="row align-items-center mb-5">
        <div class="col-md-8 text-center text-md-start">
            <h1 class="display-5 fw-bold mb-1" style="color: #2c1d11;">Bienvenido al Dashboard</h1>
            <p class="text-muted lead mb-0">Panel de administración general • Tinto Nariño</p>
        </div>
        <div class="col-md-4 text-center text-md-end mt-3 mt-md-0">
            <span class="badge p-3 fs-6 border text-uppercase" style="color: #2c1d11; background-color: #fcf8f5; border-color: #e6d7cc !important;">
                Fecha: {{ date('d/m/Y') }}
            </span>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm text-center p-3" style="background-color: #fcf8f5; border-left: 4px solid #dc3545 !important;">
                <small class="text-uppercase fw-bold text-muted" style="font-size: 0.75rem;">PQRS Pendientes</small>
                <h3 class="fw-bold my-1 text-danger">{{ $mensajesPendientes }}</h3>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm text-center p-3" style="background-color: #fcf8f5; border-left: 4px solid #198754 !important;">
                <small class="text-uppercase fw-bold text-muted" style="font-size: 0.75rem;">PQRS Respondidos</small>
                <h3 class="fw-bold my-1 text-success">{{ $mensajesRespondidos }}</h3>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm text-center p-3" style="background-color: #fcf8f5; border-left: 4px solid #2c1d11 !important;">
                <small class="text-uppercase fw-bold text-muted" style="font-size: 0.75rem;">Total Recibidos</small>
                <h3 class="fw-bold my-1 text-dark">{{ $totalMensajes }}</h3>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm text-center p-3" style="background-color: #fcf8f5; border-left: 4px solid #0dcaf0 !important;">
                <small class="text-uppercase fw-bold text-muted" style="font-size: 0.75rem;">Clientes Totales</small>
                <h3 class="fw-bold my-1 text-dark">150</h3>
            </div>
        </div>
    </div>

    <h4 class="fw-bold mb-4" style="color: #2c1d11;">Módulos del Sistema</h4>
    
    <div class="row g-4">
        
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 rounded-3">
                <div class="card-body text-center p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="mb-3">
                            <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold text-uppercase" style="font-size: 0.8rem;">
                                Módulo Activo
                            </span>
                        </div>
                        <h5 class="card-title fw-bold mt-2">Mensajes PQRS</h5>
                        <p class="card-text text-muted small">Atiende las peticiones, quejas, reclamos y sugerencias de los usuarios del sitio web.</p>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('mensajes') }}" class="btn w-100 fw-bold py-2" style="background-color: #2c1d11; color: white;">
                            Gestionar Mensajes
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 rounded-3">
                <div class="card-body text-center p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="mb-3">
                            <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold text-uppercase" style="font-size: 0.8rem;">
                                Módulo Activo
                            </span>
                        </div>
                        <h5 class="card-title fw-bold mt-2">Carta / Menú</h5>
                        <p class="card-text text-muted small">Modifica los productos del café, edita precios, descripciones e imágenes de la carta.</p>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('menu') }}" class="btn w-100 fw-bold py-2" style="background-color: #2c1d11; color: white;">
                            Ver Menú
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0 rounded-3 opacity-75">
                <div class="card-body text-center p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="mb-3">
                            <span class="badge bg-secondary-subtle text-secondary px-3 py-2 rounded-pill fw-bold text-uppercase" style="font-size: 0.8rem;">
                                Próximamente
                            </span>
                        </div>
                        <h5 class="card-title fw-bold mt-2">Usuarios y Roles</h5>
                        <p class="card-text text-muted small">Controla los accesos de los administradores y revisa el historial de clientes registrados.</p>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-secondary w-100 fw-bold py-2" disabled>No Disponible</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection