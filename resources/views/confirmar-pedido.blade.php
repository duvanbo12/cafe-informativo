@extends('layouts.app')

@section('title', 'Confirmar Pedido - Tinto Nariño')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500&display=swap');

    .tg-confirmar-wrap {
        max-width: 560px;
        margin: 2rem auto;
    }
    .tg-confirmar-header {
        text-align: center;
        margin-bottom: 2rem;
    }
    .tg-confirmar-header .tg-hero-tag {
        border: 1px solid #d4a855; color: #d4a855;
        font-size: 0.6rem; letter-spacing: 4px;
        text-transform: uppercase; padding: 3px 14px;
        border-radius: 20px; margin-bottom: 1rem;
        display: inline-block;
    }
    .tg-confirmar-header h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.2rem; color: #fbfbfb;
        font-style: italic; margin-bottom: 0.3rem;
    }
    .tg-line {
        width: 50px; height: 1px;
        background: #d4a855; margin: 0.8rem auto 0;
    }

    .tg-card {
        background: rgba(255, 248, 240, 0.97);
        border: 2px solid #d4a855;
        border-radius: 12px;
        padding: 1.8rem;
    }
    .tg-card h5 {
        font-family: 'Cormorant Garamond', serif;
        color: #3b1a08; font-size: 1.2rem;
        margin-bottom: 1rem; font-weight: 600;
    }
    .tg-item-row {
        display: flex;
        justify-content: space-between;
        font-size: 0.88rem;
        color: #5a2810;
        padding: 5px 0;
        border-bottom: 1px dotted #e8d5bc;
    }
    .tg-item-row:last-of-type { border-bottom: none; }

    .tg-total-row {
        display: flex;
        justify-content: space-between;
        font-family: 'DM Sans', sans-serif;
        font-size: 1rem; font-weight: 500;
        color: #7b3a17;
        margin-top: 0.8rem;
        padding-top: 0.8rem;
        border-top: 2px solid #d4a855;
    }

    .tg-form-label {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.82rem; color: #7b3a17;
        letter-spacing: 1px; text-transform: uppercase;
        margin-bottom: 0.4rem; display: block;
    }
    .tg-form-input {
        width: 100%;
        padding: 10px 14px;
        border: 1px solid #d4a855;
        border-radius: 6px;
        font-family: 'DM Sans', sans-serif;
        font-size: 0.9rem;
        background: #fffdf8;
        color: #3b1a08;
        outline: none;
        transition: border 0.2s;
    }
    .tg-form-input:focus { border-color: #7b3a17; }

    .tg-btn-comprar {
        background: #d4a855; color: #3b1a08;
        border: none; padding: 12px 20px;
        border-radius: 6px; width: 100%;
        cursor: pointer; margin-top: 1.2rem;
        font-family: 'DM Sans', sans-serif;
        font-size: 0.9rem; font-weight: 500;
        letter-spacing: 1px;
        transition: background 0.2s;
    }
    .tg-btn-comprar:hover { background: #b8903d; color: #fff; }

    .tg-btn-volver {
        display: block; text-align: center;
        margin-top: 1rem;
        font-family: 'DM Sans', sans-serif;
        font-size: 0.8rem; color: #9a7055;
        text-decoration: none;
        letter-spacing: 1px;
    }
    .tg-btn-volver:hover { color: #7b3a17; }
</style>

<div class="tg-confirmar-wrap">

    {{-- Encabezado --}}
    <div class="tg-confirmar-header">
        <div class="tg-hero-tag">Tinto Nariño — Pasto</div>
        <h1>Confirmar Pedido</h1>
        <div class="tg-line"></div>
    </div>

    {{-- Resumen de items --}}
    <div class="tg-card mb-3">
        <h5>🛍️ Resumen</h5>

        @foreach($miPedido as $item)
            <div class="tg-item-row">
                <span>{{ $item['nombre'] }}</span>
                <span>${{ number_format($item['precio'], 0, ',', '.') }}</span>
            </div>
        @endforeach

        <div class="tg-total-row">
            <span>Total</span>
            <strong>${{ number_format($totalPedido, 0, ',', '.') }}</strong>
        </div>
    </div>

    {{-- Formulario nombre cliente --}}
    <div class="tg-card">
        <h5>👤 ¿A nombre de quién va el pedido?</h5>

        <form action="{{ route('pedido.guardar') }}" method="POST">
            @csrf

            <label class="tg-form-label" for="nombre_cliente">Nombre</label>
            <input
                type="text"
                id="nombre_cliente"
                name="nombre_cliente"
                class="tg-form-input"
                placeholder="Ej: Juan Pérez"
                required
                maxlength="100"
            >

            @error('nombre_cliente')
                <p style="color: #c0392b; font-size: 0.8rem; margin-top: 4px;">{{ $message }}</p>
            @enderror

            <button type="submit" class="tg-btn-comprar">
                ☕ Realizar Pedido
            </button>
        </form>

        <a href="{{ route('menu') }}" class="tg-btn-volver">← Volver al menú</a>
    </div>

</div>

@endsection