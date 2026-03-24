@extends('layouts.app')

@section('title', 'Inicio - Tinto Nariño')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500&display=swap');

    .tg-hero {
        position: relative;
        height: 320px;
        overflow: hidden;
        border-radius: 12px;
        margin-bottom: 2.5rem;
    }
    .tg-hero img {
        width: 100%; height: 100%;
        object-fit: cover;
        filter: brightness(0.45) saturate(0.8);
    }
    .tg-hero-overlay {
        position: absolute; inset: 0;
        display: flex; flex-direction: column;
        align-items: center; justify-content: center;
        text-align: center; padding: 1rem;
    }
    .tg-hero-tag {
        border: 1px solid #d4a855; color: #d4a855;
        font-size: 0.6rem; letter-spacing: 4px;
        text-transform: uppercase; padding: 3px 14px;
        border-radius: 20px; margin-bottom: 1rem;
    }
    .tg-hero-overlay h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 3rem; color: rgb(255, 255, 255);
        font-style: italic; line-height: 1.1; margin-bottom: 0.4rem;
    }
    .tg-hero-overlay p {
        color: #c4956a; font-size: 0.75rem;
        letter-spacing: 4px; text-transform: uppercase;
        font-weight: 300; margin: 0;
    }
    .tg-line { width: 40px; height: 1px; background: #d4a855; margin: 1rem auto 0; }

    .tg-section-label {
        font-size: 0.65rem; letter-spacing: 4px;
        text-transform: uppercase; color: #ffe1d0;
        margin-bottom: 0.4rem; font-weight: 400;
    }
    .tg-welcome-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2rem; color: #ffffff;
        font-style: italic; margin-bottom: 1rem; line-height: 1.2;
    }
    .tg-welcome-body {
        color: #f7f3f1; font-size: 0.92rem;
        line-height: 1.9; font-weight: 300;
    }

    .tg-btn-cafe {
        display: inline-block;
        border: 1px solid #fae5da; color: #f3efed;
        padding: 0.55rem 1.6rem; border-radius: 3px;
        font-size: 0.78rem; letter-spacing: 2px;
        text-transform: uppercase; margin-top: 0.8rem;
        text-decoration: none; transition: all 0.2s;
        font-family: 'DM Sans', sans-serif;
    }
    .tg-btn-cafe:hover { background: #42291b; color: #fff; }

    .tg-img-side {
        width: 100%; height: 280px;
        object-fit: cover; border-radius: 10px;
        filter: brightness(0.9) saturate(1.1);
    }

    .tg-img-bottom {
        width: 100%; height: 220px;
        object-fit: cover; border-radius: 10px;
        filter: brightness(0.85) saturate(1.1);
        margin-bottom: 2.5rem;
    }

    .tg-card {
        background: rgb(255, 237, 228);
        border: 1px solid #e8d5bc;
        border-radius: 10px; padding: 1.4rem;
        text-align: center; height: 100%;
        transition: transform 0.2s, box-shadow 0.2s;
        backdrop-filter: blur(4px);
    }
    .tg-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(59, 26, 8, 0.12);
    }
    .tg-card h5 {
        font-family: 'Cormorant Garamond', serif;
        color: #000000; font-size: 1rem; margin-bottom: 0.3rem;
    }
    .tg-card p { color: #724c2f; font-size: 0.78rem; font-weight: 300; margin: 0; }

    .tg-quote {
        border-left: 2px solid #d4a855;
        padding: 1rem 1.5rem;
        background: rgb(255, 248, 239);
        border-radius: 0 8px 8px 0;
        backdrop-filter: blur(4px);
        margin-bottom: 1rem;
    }
    .tg-quote p {
        font-family: 'Cormorant Garamond', serif;
        font-style: italic; font-size: 1.15rem;
        color: #3b1a08; line-height: 1.7; margin: 0;
    }
    .tg-quote span {
        display: block; margin-top: 0.5rem;
        font-size: 0.72rem; color: #9a7055;
        letter-spacing: 2px; font-weight: 300;
        font-family: 'DM Sans', sans-serif;
    }
</style>

{{-- Hero: imagen 1 de fondo --}}
<div class="tg-hero">
    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=1200&q=80" alt="Café nariñense">
    <div class="tg-hero-overlay">
        <div class="tg-hero-tag">Pasto, Nariño — Colombia</div>
        <h1>Tinto Nariño</h1>
        <p>El mejor café del sur de Colombia</p>
        <div class="tg-line"></div>
    </div>
</div>

{{-- Bienvenida + imagen 2 al lado --}}
<div class="row align-items-center mb-5">
    <div class="col-md-7">
        <div class="tg-section-label">Bienvenidos</div>
        <h2 class="tg-welcome-title">Una experiencia única en cada taza</h2>
        <h1 class="tg-welcome-body">
            Bienvenido a <strong>Tinto Nariño</strong>, donde podrás disfrutar del auténtico
            sabor del café nariñense, preparado con dedicación y amor por nuestra tierra.
        </h1>
        <p class="tg-welcome-body mt-2">
            Relájate, comparte buenos momentos y déjate conquistar por el aroma de nuestras montañas. ☕
        </p>
        <a href="{{ route('menu') }}" class="tg-btn-cafe">Ver Menú →</a>
    </div>
    <div class="col-md-5 mt-4 mt-md-0">
        <img class="tg-img-side"
             src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2f/a9/94/c2/nuestro-local.jpg"
             alt="Barista preparando café">
    </div>
</div>

{{-- Tarjetas --}}
<div class="row text-center mb-5">
    <div class="col-md-4 mb-3">
        <div class="tg-card">
            <div style="font-size:1.8rem; margin-bottom:0.6rem;">☕</div>
            <h5>Café de origen</h5>
            <p>Directo de las montañas de Nariño</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="tg-card">
            <div style="font-size:1.8rem; margin-bottom:0.6rem;">🌿</div>
            <h5>100% natural</h5>
            <p>Sin conservantes ni aditivos</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="tg-card">
            <div style="font-size:1.8rem; margin-bottom:0.6rem;">❤️</div>
            <h5>Hecho con amor</h5>
            <p>Tradición cafetera nariñense</p>
        </div>
    </div>
</div>

{{-- Cita --}}
<div class="tg-quote mb-5">
    <p>"El café nariñense no es solo una bebida — es una historia de montañas, manos y dedicación."</p>
    <span>— Tradición cafetera del sur de Colombia</span>
</div>

@endsection