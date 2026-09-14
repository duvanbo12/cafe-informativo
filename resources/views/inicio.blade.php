@extends('layouts.app')

@section('title', 'Inicio - Tinto Nariño')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&family=DM+Sans:wght@300;400;500;600&display=swap');

    :root {
        --cafe-dark: #2c150b;
        --cafe-gold: #8c5830;
        --cafe-light: #f5ebd0;
        --cafe-accent: #5c3a21;
    }

    /* Fondo general unificado con las demás vistas (avena a café profundo) */
    body {
        background: linear-gradient(135deg, #f5ebd0 0%, #d4b595 40%, #5c3a21 85%, #2c150b 100%);
        background-attachment: fixed;
        font-family: 'DM Sans', sans-serif;
        color: #2c150b;
    }

    /* Hero Section */
    .tg-hero {
        position: relative;
        height: 450px; 
        overflow: hidden;
        border-radius: 16px;
        margin-bottom: 4rem;
        box-shadow: 0 15px 35px rgba(44, 21, 11, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.5);
    }
    .tg-hero img {
        width: 100%; height: 100%;
        object-fit: cover;
        filter: brightness(0.45) saturate(1.1);
        transition: transform 10s ease;
    }
    .tg-hero:hover img { transform: scale(1.05); }

    .tg-hero-overlay {
        position: absolute; inset: 0;
        display: flex; flex-direction: column;
        align-items: center; justify-content: center;
        text-align: center; padding: 2rem;
    }
    .tg-hero-tag {
        border: 1px solid rgba(255, 255, 255, 0.4); 
        color: #f5ebd0;
        font-size: 0.75rem; letter-spacing: 5px;
        text-transform: uppercase; padding: 6px 20px;
        border-radius: 30px; margin-bottom: 1.5rem;
        background: rgba(44, 21, 11, 0.5);
        backdrop-filter: blur(8px);
        font-weight: 600;
    }
    .tg-hero-overlay h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(2.5rem, 6vw, 4.5rem); 
        color: #ffffff;
        font-weight: 600; font-style: italic; line-height: 1; margin-bottom: 1rem;
        text-shadow: 0 2px 15px rgba(0,0,0,0.4);
    }
    .tg-hero-overlay p {
        color: #f5ebd0; 
        font-size: 0.9rem;
        letter-spacing: 5px; text-transform: uppercase;
        font-weight: 500; margin: 0;
    }

    /* Welcome Section */
    .tg-section-label {
        font-size: 0.75rem; letter-spacing: 3px;
        text-transform: uppercase; color: #5c3a21;
        margin-bottom: 0.8rem; font-weight: 700;
    }
    .tg-welcome-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.8rem; color: #2c150b;
        font-style: italic;
        line-height: 1.1; margin-bottom: 1.5rem;
        font-weight: 600;
    }
    .tg-welcome-body {
        color: #4a2c1d; font-size: 1.05rem;
        line-height: 1.8; font-weight: 400;
    }

    .tg-btn-cafe {
        display: inline-block;
        background: #5c3a21;
        color: #f5ebd0;
        padding: 0.8rem 2.2rem;
        border-radius: 50px;
        font-size: 0.85rem; letter-spacing: 2px;
        text-transform: uppercase; margin-top: 1.5rem;
        text-decoration: none; transition: all 0.3s ease;
        font-family: 'DM Sans', sans-serif;
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(92, 58, 33, 0.2);
    }
    .tg-btn-cafe:hover {
        background: #3b200e;
        transform: translateY(-2px);
        color: #fff;
        box-shadow: 0 8px 20px rgba(92, 58, 33, 0.3);
    }

    .tg-img-side {
        width: 100%; height: 400px;
        object-fit: cover; border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.6);
        box-shadow: 0 10px 30px rgba(44, 21, 11, 0.15);
    }

    /* Cards con efecto cristal claro */
    .tg-card {
        background: rgba(255, 255, 255, 0.4);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: 16px; padding: 2rem;
        text-align: center; height: 100%;
        transition: all 0.3s ease;
        box-shadow: 0 8px 32px 0 rgba(44, 21, 11, 0.1);
    }
    .tg-card:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.6);
        border-color: #5c3a21;
        box-shadow: 0 12px 35px rgba(44, 21, 11, 0.15);
    }
    .tg-card .icon-box {
        font-size: 2rem; margin-bottom: 1rem;
        display: block;
    }
    .tg-card h5 {
        font-family: 'Cormorant Garamond', serif;
        color: #2c150b; font-size: 1.4rem; font-weight: 600;
        font-style: italic;
    }
    .tg-card p { color: #5c3a21; font-size: 0.95rem; margin: 0; font-weight: 400; }

    /* Quote con estilo cristal */
    .tg-quote {
        margin: 4rem 0;
        padding: 3rem;
        background: rgba(255, 255, 255, 0.35);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-radius: 16px;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-left: 4px solid #5c3a21;
        box-shadow: 0 8px 32px 0 rgba(44, 21, 11, 0.1);
    }
    .tg-quote p {
        font-family: 'Cormorant Garamond', serif;
        font-style: italic; font-size: 1.6rem;
        color: #2c150b; line-height: 1.4; margin: 0;
        font-weight: 500;
    }
    .tg-quote span {
        display: block; margin-top: 1rem;
        font-size: 0.8rem; color: #5c3a21;
        letter-spacing: 3px; text-transform: uppercase;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .tg-hero { height: 350px; }
        .tg-welcome-title { font-size: 2rem; }
        .tg-img-side { height: 300px; }
    }
</style>

{{-- Hero --}}
<div class="tg-hero">
    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=1200&q=80" alt="Café nariñense">
    <div class="tg-hero-overlay">
        <div class="tg-hero-tag">Pasto, Nariño — Colombia</div>
        <h1>Tinto Nariño</h1>
        <p>Tradición en cada grano</p>
    </div>
</div>

{{-- Bienvenida --}}
<div class="row align-items-center mb-5 pb-5">
    <div class="col-md-6 pe-md-5">
        <div class="tg-section-label">Nuestra Esencia</div>
        <h2 class="tg-welcome-title">Una experiencia única en cada taza</h2>
        <p class="tg-welcome-body">
            Bienvenido a <strong>Tinto Nariño</strong>, un refugio donde el aroma de las montañas se encuentra con la calidez de nuestra gente. Preparamos cada tinto con la dedicación que solo nuestra tierra puede inspirar.
        </p>
        <p class="tg-welcome-body mt-3">
            Relájate, comparte buenos momentos y déjate conquistar por el auténtico sabor del sur colombiano. ☕
        </p>
        <a href="{{ route('menu') }}" class="tg-btn-cafe">Explorar Menú</a>
    </div>
    <div class="col-md-6 mt-5 mt-md-0">
        <img class="tg-img-side" 
             src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2f/a9/94/c2/nuestro-local.jpg" 
             alt="Nuestro local en Pasto">
    </div>
</div>

{{-- Beneficios/Tarjetas --}}
<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="tg-card">
            <span class="icon-box">☕</span>
            <h5>Café de Origen</h5>
            <p>Seleccionado cuidadosamente de las fincas con mayor altura en Nariño.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="tg-card">
            <span class="icon-box">🌿</span>
            <h5>Proceso Artesanal</h5>
            <p>Respetamos los tiempos naturales para garantizar un sabor 100% puro.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="tg-card">
            <span class="icon-box">❤️</span>
            <h5>Identidad Local</h5>
            <p>Somos el reflejo de la cultura cafetera y el orgullo de nuestra región.</p>
        </div>
    </div>
</div>

{{-- Cita --}}
<div class="tg-quote">
    <p>"El café de Nariño no es solo una bebida; es una historia escrita por manos campesinas en el corazón de los Andes."</p>
    <span>— Orgullo Volcánico</span>
</div>

@endsection