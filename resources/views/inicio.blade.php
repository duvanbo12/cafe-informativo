@extends('layouts.app')

@section('title', 'Inicio - Tinto Nariño')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&family=DM+Sans:wght@300;400;500&display=swap');

    :root {
        --cafe-dark: #2c1810;
        --cafe-gold: #d4a855;
        --cafe-light: #fdf8f5;
        --cafe-accent: #c4956a;
    }

    /* Hero Section */
    .tg-hero {
        position: relative;
        height: 450px; /* Un poco más alto para mayor impacto */
        overflow: hidden;
        border-radius: 16px;
        margin-bottom: 4rem;
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }
    .tg-hero img {
        width: 100%; height: 100%;
        object-fit: cover;
        filter: brightness(0.4) saturate(0.9);
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
        border: 1px solid var(--cafe-gold); 
        color: var(--cafe-gold);
        font-size: 0.7rem; letter-spacing: 5px;
        text-transform: uppercase; padding: 6px 20px;
        border-radius: 30px; margin-bottom: 1.5rem;
        backdrop-filter: blur(4px);
    }
    .tg-hero-overlay h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(2.5rem, 6vw, 4.5rem); 
        color: #ffffff;
        font-weight: 500; line-height: 1; margin-bottom: 1rem;
    }
    .tg-hero-overlay p {
        color: var(--cafe-accent); 
        font-size: 0.85rem;
        letter-spacing: 5px; text-transform: uppercase;
        font-weight: 400; margin: 0;
    }

    /* Welcome Section */
    .tg-section-label {
        font-size: 0.75rem; letter-spacing: 3px;
        text-transform: uppercase; color: var(--cafe-gold);
        margin-bottom: 0.8rem; font-weight: 600;
    }
    .tg-welcome-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.8rem; color: var(--cafe-dark);
        line-height: 1.1; margin-bottom: 1.5rem;
    }
    .tg-welcome-body {
        color: #5a4a42; font-size: 1.05rem;
        line-height: 1.8; font-weight: 300;
    }

    .tg-btn-cafe {
        display: inline-block;
        background: var(--cafe-dark);
        color: #fff;
        padding: 0.8rem 2.2rem;
        border-radius: 50px;
        font-size: 0.85rem; letter-spacing: 2px;
        text-transform: uppercase; margin-top: 1.5rem;
        text-decoration: none; transition: all 0.3s ease;
        font-family: 'DM Sans', sans-serif;
    }
    .tg-btn-cafe:hover {
        background: var(--cafe-gold);
        transform: translateY(-2px);
        color: #fff;
        box-shadow: 0 10px 20px rgba(212, 168, 85, 0.3);
    }

    .tg-img-side {
        width: 100%; height: 400px;
        object-fit: cover; border-radius: 20px;
        box-shadow: 20px 20px 0px var(--cafe-light);
    }

    /* Cards */
    .tg-card {
        background: #ffffff;
        border: 1px solid #eee7e0;
        border-radius: 16px; padding: 2rem;
        text-align: center; height: 100%;
        transition: all 0.3s ease;
    }
    .tg-card:hover {
        transform: translateY(-8px);
        border-color: var(--cafe-gold);
        box-shadow: 0 15px 35px rgba(44, 24, 16, 0.08);
    }
    .tg-card .icon-box {
        font-size: 2rem; margin-bottom: 1rem;
        display: block;
    }
    .tg-card h5 {
        font-family: 'Cormorant Garamond', serif;
        color: var(--cafe-dark); font-size: 1.4rem; font-weight: 600;
    }
    .tg-card p { color: #8e7d74; font-size: 0.9rem; margin: 0; }

    /* Quote */
    .tg-quote {
        margin: 4rem 0;
        padding: 3rem;
        background: var(--cafe-light);
        border-radius: 20px;
        text-align: center;
        border-left: 4px solid var(--cafe-gold);
    }
    .tg-quote p {
        font-family: 'Cormorant Garamond', serif;
        font-style: italic; font-size: 1.6rem;
        color: var(--cafe-dark); line-height: 1.4; margin: 0;
    }
    .tg-quote span {
        display: block; margin-top: 1rem;
        font-size: 0.8rem; color: var(--cafe-gold);
        letter-spacing: 3px; text-transform: uppercase;
    }

    @media (max-width: 768px) {
        .tg-hero { height: 350px; }
        .tg-welcome-title { font-size: 2rem; }
        .tg-img-side { height: 300px; box-shadow: 10px 10px 0px var(--cafe-light); }
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
        <p class="tg-welcome-body">
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