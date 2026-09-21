@extends('layouts.app')

@section('title', 'Menú - Tinto Galeras')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500;700&display=swap');

    /* Fondo tipo avena/crema suave difuminando a un café profundo (igual al de la vista Nosotros) */
    body {
        background: linear-gradient(135deg, #f5ebd0 0%, #d4b595 40%, #5c3a21 85%, #2c150b 100%);
        background-attachment: fixed;
        font-family: 'DM Sans', sans-serif;
        color: #2c150b;
    }

    .tg-menu-header {
        text-align: center;
        margin-bottom: 2rem;
        padding-top: 1rem;
    }
    .tg-hero-tag {
        border: 1px solid rgba(92, 58, 33, 0.4); 
        color: #5c3a21;
        font-size: 0.65rem; letter-spacing: 3px;
        text-transform: uppercase; padding: 4px 14px;
        border-radius: 20px; margin-bottom: 0.8rem;
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(8px);
        font-weight: 600;
    }
    .tg-menu-header h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.8rem; color: #2c150b;
        font-style: italic; margin-bottom: 0.2rem;
        text-shadow: 0 2px 15px rgba(255, 255, 255, 0.4);
    }
    .tg-menu-header p {
        color: #5c3a21; font-size: 0.85rem;
        letter-spacing: 2px; text-transform: uppercase;
        font-weight: 500;
    }

    .tg-category-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.8rem; color: #2c150b;
        font-style: italic;
        margin-bottom: 1.2rem;
        margin-top: 1.8rem;
        border-bottom: 1px solid rgba(92, 58, 33, 0.2);
        padding-bottom: 0.3rem;
    }

    /* EFECTO VIDRIADO CLARO PARA LAS TARJETAS DEL MENÚ */
    .tg-horizontal-card {
        background: rgba(255, 255, 255, 0.4);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: 14px;
        overflow: hidden;
        display: flex;
        align-items: center;
        padding: 12px;
        margin-bottom: 1rem;
        box-shadow: 0 8px 32px 0 rgba(44, 21, 11, 0.12);
        transition: transform 0.25s ease, background 0.25s ease, border-color 0.25s ease;
    }
    .tg-horizontal-card:hover {
        transform: translateY(-3px);
        background: rgba(255, 255, 255, 0.65);
        border-color: #5c3a21;
    }
    .tg-horizontal-img {
        width: 85px;
        height: 85px;
        border-radius: 10px;
        object-fit: cover;
        flex-shrink: 0;
        border: 1px solid rgba(255, 255, 255, 0.6);
    }
    .tg-horizontal-body {
        padding-left: 1rem;
        flex-grow: 1;
    }
    .tg-horizontal-body h5 {
        font-family: 'Cormorant Garamond', serif;
        color: #2c150b;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 0.15rem;
    }
    .tg-horizontal-body p {
        color: #4a2c1d;
        font-size: 0.78rem;
        margin-bottom: 0.4rem;
        line-height: 1.3;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        font-weight: 400;
    }
    .tg-price-box {
        display: flex;
        align-items: baseline;
        gap: 8px;
    }
    .tg-current-price {
        font-weight: 700;
        color: #5c3a21;
        font-size: 0.95rem;
    }
    
    /* Botón de "+" estilo cristal claro / café */
    .tg-btn-plus {
        background: #5c3a21;
        color: #f5ebd0;
        border: none;
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.2s;
        flex-shrink: 0;
        margin-left: 10px;
    }
    .tg-btn-plus:hover {
        background: #3b200e;
        color: #fff;
    }

    /* Tarjeta de resumen de pedido flotante estilo cristal claro */
    .tg-pedido-card {
        border: 1px solid rgba(255, 255, 255, 0.6);
        background: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(16px);
        border-radius: 14px;
        margin-bottom: 2rem;
        color: #2c150b;
        box-shadow: 0 8px 32px 0 rgba(44, 21, 11, 0.15);
    }
</style>

{{-- Mensaje de éxito --}}
@if(session('success'))
<div class="alert text-center mb-3 py-2" style="background: rgba(40, 167, 69, 0.2); backdrop-filter: blur(10px); border: 1px solid rgba(40, 167, 69, 0.4); color: #155724; border-radius: 10px; font-size: 0.88rem;">
    {{ session('success') }}
</div>
@endif

{{-- Encabezado --}}
<div class="tg-menu-header">
    <div class="tg-hero-tag">Pasto, Nariño — Colombia</div>
    <h1>Nuestro Menú</h1>
    <p>Escoge tus favoritos y arma tu pedido</p>
</div>

{{-- Resumen del Pedido Actual --}}
@if(isset($miPedido) && count($miPedido) > 0)
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="tg-pedido-card p-3">
            <h5 style="font-family: 'Cormorant Garamond', serif; color: #2c150b; font-size: 1.2rem; font-weight: bold;">🛍️ Tu Pedido Actual</h5>
            <ul class="list-unstyled mb-2" style="font-size: 0.88rem;">
                @foreach($miPedido as $item)
                    <li class="d-flex justify-content-between py-1 border-bottom" style="border-color: rgba(92, 58, 33, 0.15) !important;">
                        <span style="color: #4a2c1d;">{{ $item['nombre'] }}</span>
                        <strong style="color: #5c3a21;">${{ number_format($item['precio'], 0, ',', '.') }}</strong>
                    </li>
                @endforeach
            </ul>
            <div class="d-flex justify-content-between align-items-center mt-2 pt-2 border-top" style="border-color: rgba(92, 58, 33, 0.15) !important;">
                <span class="fw-bold" style="color: #2c150b;">Total: ${{ number_format($totalPedido, 0, ',', '.') }}</span>
                <div>
                    <a href="{{ route('pedido.confirmar') }}" class="btn btn-sm px-3" style="background: #5c3a21; color: #f5ebd0; font-weight: 600; border-radius: 8px;">Confirmar</a>
                    <form action="{{ route('pedido.limpiar') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger ms-1" style="border-radius: 8px;">Vaciar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<div class="row justify-content-center">
    <div class="col-lg-8">

        {{-- Categoría: Bebidas --}}
        <div class="tg-category-title">☕ Bebidas</div>
        <div class="row">
            @php
                $bebidas = $productos->take(6);
            @endphp
            @foreach($bebidas as $producto)
            <div class="col-md-6">
                <div class="tg-horizontal-card">
                    @if($producto->imagen)
                        <img src="{{ $producto->imagen }}" class="tg-horizontal-img" alt="{{ $producto->nombre }}">
                    @endif
                    <div class="tg-horizontal-body">
                        <h5>{{ $producto->nombre }}</h5>
                        <p>{{ $producto->descripcion }}</p>
                        <div class="tg-price-box">
                            <span class="tg-current-price">${{ number_format($producto->precio, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <form action="{{ route('pedido.agregar', $producto->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="tg-btn-plus" title="Agregar">+</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Categoría: Comidas --}}
        <div class="tg-category-title">🥐 Comidas</div>
        <div class="row">
            @php
                $comidas = $productos->skip(6)->take(6);
            @endphp
            @foreach($comidas as $producto)
            <div class="col-md-6">
                <div class="tg-horizontal-card">
                    @if($producto->imagen)
                        <img src="{{ $producto->imagen }}" class="tg-horizontal-img" alt="{{ $producto->nombre }}">
                    @endif
                    <div class="tg-horizontal-body">
                        <h5>{{ $producto->nombre }}</h5>
                        <p>{{ $producto->descripcion }}</p>
                        <div class="tg-price-box">
                            <span class="tg-current-price">${{ number_format($producto->precio, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <form action="{{ route('pedido.agregar', $producto->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="tg-btn-plus" title="Agregar">+</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection