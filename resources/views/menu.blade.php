@extends('layouts.app')

@section('title', 'Menú - Tinto Nariño')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500&display=swap');

    .tg-menu-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }
    .tg-menu-header .tg-hero-tag {
        border: 1px solid #d4a855; color: #d4a855;
        font-size: 0.6rem; letter-spacing: 4px;
        text-transform: uppercase; padding: 3px 14px;
        border-radius: 20px; margin-bottom: 1rem;
        display: inline-block;
    }
    .tg-menu-header h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.6rem; color: #fbfbfb;
        font-style: italic; margin-bottom: 0.3rem;
    }
    .tg-menu-header p {
        color: #ffffff; font-size: 0.82rem;
        letter-spacing: 3px; text-transform: uppercase;
        font-weight: 300;
    }
    .tg-line {
        width: 50px; height: 1px;
        background: #d4a855; margin: 0.8rem auto 0;
    }

    .tg-category-label {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.5rem; color: #ffe5d6;
        font-style: italic;
        border-bottom: 1px solid #d4a855;
        padding-bottom: 0.4rem;
        margin-bottom: 1.5rem;
        margin-top: 2.5rem;
    }

    .tg-product-card {
        background: rgba(255, 248, 240, 0.88);
        border: 1px solid #e8d5bc;
        border-radius: 10px;
        overflow: hidden;
        height: 100%;
        transition: transform 0.2s, box-shadow 0.2s;
        backdrop-filter: blur(4px);
    }
    .tg-product-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(59, 26, 8, 0.15);
    }
    .tg-product-card img {
        width: 100%; height: 160px;
        object-fit: cover;
        filter: brightness(0.88) saturate(1.1);
    }
    .tg-product-body {
        padding: 1rem 1.1rem;
    }
    .tg-product-body h5 {
        font-family: 'Cormorant Garamond', serif;
        color: #3b1a08; font-size: 1.05rem;
        margin-bottom: 0.25rem; font-weight: 600;
    }
    .tg-product-body p {
        color: #9a7055; font-size: 0.78rem;
        font-weight: 300; margin-bottom: 0.6rem;
        line-height: 1.5;
    }
    .tg-product-price {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.85rem; font-weight: 500;
        color: #7b3a17; letter-spacing: 1px;
    }
    .tg-btn-agregar {
        background: #7b3a17; color: #fff;
        border: none; padding: 8px 15px;
        border-radius: 5px; width: 100%;
        cursor: pointer; margin-top: 10px;
        font-family: 'DM Sans', sans-serif;
        font-size: 0.82rem; letter-spacing: 1px;
        transition: background 0.2s;
    }
    .tg-btn-agregar:hover { background: #5a2810; }

    .tg-pedido-card {
        border: 2px solid #d4a855;
        background: rgba(255, 248, 240, 0.97);
        border-radius: 10px;
        margin-bottom: 2rem;
    }
    .tg-pedido-card .card-body h5 {
        font-family: 'Cormorant Garamond', serif;
        color: #3b1a08; font-size: 1.2rem;
        margin-bottom: 0.8rem;
    }
    .tg-pedido-card ul li {
        color: #5a2810; font-size: 0.88rem;
        padding: 3px 0;
    }
    .tg-pedido-total {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.95rem; font-weight: 500;
        color: #7b3a17; margin-top: 0.6rem;
        border-top: 1px solid #e8d5bc;
        padding-top: 0.5rem;
    }
    .tg-btn-comprar {
        background: #d4a855; color: #3b1a08;
        border: none; padding: 10px 20px;
        border-radius: 5px; width: 100%;
        cursor: pointer; margin-top: 8px;
        font-family: 'DM Sans', sans-serif;
        font-size: 0.88rem; font-weight: 500;
        letter-spacing: 1px;
        transition: background 0.2s;
        text-decoration: none;
        display: block;
        text-align: center;
    }
    .tg-btn-comprar:hover { background: #b8903d; color: #fff; }

    .tg-quote {
        border-left: 2px solid #d4a855;
        padding: 1rem 1.5rem;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 0 8px 8px 0;
        backdrop-filter: blur(4px);
        margin-top: 3rem; margin-bottom: 1rem;
    }
    .tg-quote p {
        font-family: 'Cormorant Garamond', serif;
        font-style: italic; font-size: 1.1rem;
        color: #3b1a08; line-height: 1.7; margin: 0;
    }
    .tg-quote span {
        display: block; margin-top: 0.4rem;
        font-size: 0.72rem; color: #9a7055;
        letter-spacing: 2px; font-weight: 300;
        font-family: 'DM Sans', sans-serif;
    }
</style>

{{-- Mensaje de éxito --}}
@if(session('success'))
<div class="alert alert-success text-center mb-3" style="background: #d4edda; border: 1px solid #c3e6cb; color: #155724; border-radius: 8px;">
    {{ session('success') }}
</div>
@endif

{{-- Resumen del Pedido --}}
@if(isset($miPedido) && count($miPedido) > 0)
<div class="tg-pedido-card">
    <div class="card-body p-3">
        <h5>🛍️ Tu Pedido Actual</h5>
        <ul class="list-unstyled mb-2">
            @foreach($miPedido as $item)
                <li>{{ $item['nombre'] }} — <strong>${{ number_format($item['precio'], 0, ',', '.') }}</strong></li>
            @endforeach
        </ul>
        <div class="tg-pedido-total">
            Total: <strong>${{ number_format($totalPedido, 0, ',', '.') }}</strong>
        </div>
        <a href="{{ route('pedido.confirmar') }}" class="tg-btn-comprar mt-2">
            ✅ Confirmar y Comprar
        </a>
        <form action="{{ route('pedido.limpiar') }}" method="POST" class="mt-2">
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm w-100">Vaciar cuenta</button>
        </form>
    </div>
</div>
@endif

{{-- Encabezado --}}
<div class="tg-menu-header">
    <div class="tg-hero-tag">Pasto, Nariño — Colombia</div>
    <h1>Nuestro Menú</h1>
    <p>Sabor auténtico en cada producto</p>
    <div class="tg-line"></div>
</div>

{{-- Categoría: Bebidas --}}
<div class="tg-category-label">☕ Bebidas</div>
<div class="row g-3 mb-2">
    @php
        $bebidasIds = [1, 2, 3, 4, 5, 6];
        $bebidas = $productos->whereIn('id', $bebidasIds);
    @endphp
    @foreach($bebidas as $producto)
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            @if($producto->imagen)
                <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
            @endif
            <div class="tg-product-body">
                <h5>{{ $producto->nombre }}</h5>
                <p>{{ $producto->descripcion }}</p>
                <span class="tg-product-price">${{ number_format($producto->precio, 0, ',', '.') }}</span>
                <form action="{{ route('pedido.agregar', $producto->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="tg-btn-agregar">Agregar al pedido</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- Categoría: Comidas --}}
<div class="tg-category-label">🥐 Comidas</div>
<div class="row g-3 mb-2">
    @php
        $comidasIds = [7, 8, 9, 10, 11, 12];
        $comidas = $productos->whereIn('id', $comidasIds);
    @endphp
    @foreach($comidas as $producto)
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            @if($producto->imagen)
                <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
            @endif
            <div class="tg-product-body">
                <h5>{{ $producto->nombre }}</h5>
                <p>{{ $producto->descripcion }}</p>
                <span class="tg-product-price">${{ number_format($producto->precio, 0, ',', '.') }}</span>
                <form action="{{ route('pedido.agregar', $producto->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="tg-btn-agregar">Agregar al pedido</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- Cita --}}
<div class="tg-quote">
    <p>"Cada producto está pensado para acompañar el mejor momento del día — tu taza de café."</p>
    <span>— Tinto Nariño, Pasto</span>
</div>

@endsection