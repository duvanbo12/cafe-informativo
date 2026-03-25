@extends('layouts.app')

@section('title', 'Contacto - Tinto Nariño')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500&display=swap');

    .tg-menu-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }
    .tg-hero-tag {
        border: 1px solid #d4a855; color: #d4a855;
        font-size: 0.6rem; letter-spacing: 4px;
        text-transform: uppercase; padding: 3px 14px;
        border-radius: 20px; margin-bottom: 1rem;
        display: inline-block;
    }
    .tg-menu-header h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.6rem; color: #f1f0ee;
        font-style: italic; margin-bottom: 0.3rem;
    }
    .tg-menu-header p {
        color: #ffffff; font-size: 0.82rem;
        letter-spacing: 3px; text-transform: uppercase; font-weight: 300;
    }
    .tg-line {
        width: 50px; height: 1px;
        background: #d4a855; margin: 0.8rem auto 0;
    }

    /* Info cards — beige */
    .tg-info-card {
        background: rgb(255, 252, 247);
        border: 1px solid #e8d5bc;
        border-radius: 12px;
        padding: 1.6rem;
        text-align: center;
        height: 100%;
        transition: transform 0.2s, box-shadow 0.2s;
        backdrop-filter: blur(6px);
    }
    .tg-info-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(0,0,0,0.15);
    }
    .tg-info-card i {
        font-size: 1.6rem;
        color: #7b3a17;
        margin-bottom: 0.7rem;
        display: block;
    }
    .tg-info-card h5 {
        font-family: 'Cormorant Garamond', serif;
        color: #030202; font-size: 1rem;
        margin-bottom: 0.4rem; font-weight: 600;
    }
    .tg-info-card p {
        color: #7b3a17; font-size: 0.82rem;
        font-weight: 300; margin: 0; line-height: 1.6;
    }
    .tg-info-card a {
        color: #7b3a17; text-decoration: none;
    }
    .tg-info-card a:hover { color: #3b1a08; }

    /* Formulario */
    .tg-form-card {
        background: rgb(237, 236, 235);
        border: 1px solid #7a4a2a;
        border-radius: 14px;
        padding: 2.2rem;
        backdrop-filter: blur(6px);
    }
    .tg-form-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.6rem; color: #000000;
        font-style: italic; margin-bottom: 0.3rem;
    }
    .tg-form-subtitle {
        font-size: 0.78rem; color: #090808;
        font-weight: 300; letter-spacing: 1px;
        margin-bottom: 1.8rem;
    }
    .tg-form-card label {
        font-size: 0.72rem; letter-spacing: 2px;
        text-transform: uppercase; color: #d4a855;
        font-weight: 400; font-family: 'DM Sans', sans-serif;
        margin-bottom: 0.3rem; display: block;
    }
    .tg-form-card .form-control,
    .tg-form-card .form-select {
        background: rgba(255, 250, 247, 0.61);
        border: 1px solid #7a4a2a;
        border-radius: 4px;
        color: #e8c98a;
        font-size: 0.88rem;
        font-family: 'DM Sans', sans-serif;
        font-weight: 300;
    }
    .tg-form-card .form-control::placeholder { color: #7a5c3a; }
    .tg-form-card .form-control:focus,
    .tg-form-card .form-select:focus {
        background: rgba(61, 30, 10, 0.85);
        border-color: #d4a855;
        box-shadow: 0 0 0 2px rgba(212,168,85,0.2);
        color: #e8c98a;
    }
    .tg-form-card .form-select option {
        background: #3d1e0a;
        color: #e8c98a;
    }
    .tg-btn-enviar {
        width: 100%;
        border: 1px solid #d4a855;
        color: #d4a855;
        background: transparent;
        padding: 0.65rem;
        border-radius: 3px;
        font-size: 0.78rem;
        letter-spacing: 3px;
        text-transform: uppercase;
        font-family: 'DM Sans', sans-serif;
        transition: all 0.2s;
        cursor: pointer;
        margin-top: 0.5rem;
    }
    .tg-btn-enviar:hover {
        background: #45372f;
        color: #f9f9f9;
    }
    .tg-form-note {
        font-size: 0.7rem; color: #7a5c3a;
        text-align: center; margin-top: 1rem;
        font-family: 'DM Sans', sans-serif;
        font-weight: 300; letter-spacing: 1px;
    }

    /* Mapa */
    .tg-map-wrapper {
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid #7a4a2a;
    }

    /* Redes sociales */
    .tg-social-grande {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        background: rgba(85, 46, 25, 0.6);
        border: 1px solid #7a4a2a;
        border-radius: 8px;
        padding: 0.7rem 1.2rem;
        color: #eee9e5;
        text-decoration: none;
        font-size: 0.82rem;
        font-family: 'DM Sans', sans-serif;
        font-weight: 300;
        transition: all 0.2s;
        margin: 0.3rem;
    }
    .tg-social-grande i { font-size: 1.1rem; color: #fffefc; }
    .tg-social-grande:hover {
        background: rgba(212, 168, 85, 0.15);
        border-color: #d4a855;
        color: #faf8f3;
    }

    .tg-category-label {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.4rem; color: #f8f5ef;
        font-style: italic;
        border-bottom: 1px solid #7a4a2a;
        padding-bottom: 0.4rem;
        margin-bottom: 1.5rem;
        margin-top: 2.5rem;
    }

    /* Cita */
    .tg-quote {
        border-left: 2px solid #f2eee7;
        padding: 1rem 1.5rem;
        background: rgba(85, 46, 25, 0.5);
        border-radius: 0 8px 8px 0;
        backdrop-filter: blur(4px);
        margin-top: 3rem;
    }
    .tg-quote p {
        font-family: 'Cormorant Garamond', serif;
        font-style: italic; font-size: 1.1rem;
        color: #e8c98a; line-height: 1.7; margin: 0;
    }
    .tg-quote span {
        display: block; margin-top: 0.4rem;
        font-size: 0.72rem; color: #a07050;
        letter-spacing: 2px; font-weight: 300;
        font-family: 'DM Sans', sans-serif;
    }
</style>

{{-- Encabezado --}}
<div class="tg-menu-header">
    <div class="tg-hero-tag">Pasto, Nariño — Colombia</div>
    <h1>Contáctanos</h1>
    <p>Estamos para servirte</p>
    <div class="tg-line"></div>
</div>

{{-- Tarjetas de información --}}
<div class="row g-3 mb-5">
    <div class="col-md-3 col-sm-6">
        <div class="tg-info-card">
            <i class="bi bi-geo-alt-fill"></i>
            <h5>Ubicación</h5>
            <p>Pasto, Nariño<br>Colombia</p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="tg-info-card">
            <i class="bi bi-telephone-fill"></i>
            <h5>Teléfono</h5>
            <p><a href="tel:+573000000000">+57 300 000 0000</a></p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="tg-info-card">
            <i class="bi bi-envelope-fill"></i>
            <h5>Correo</h5>
            <p><a href="mailto:info@tintonarino.com">info@tintonarino.com</a></p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="tg-info-card">
            <i class="bi bi-clock-fill"></i>
            <h5>Horarios</h5>
            <p>Lun–Vie: 7am–8pm<br>Sáb–Dom: 8am–6pm</p>
        </div>
    </div>
</div>


    {{-- Mapa --}}
    <div class="col-md-5">
        <div class="tg-map-wrapper" style="height: 100%; min-height: 400px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63875.47835082168!2d-77.30150!3d1.21360!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2ed40000000001%3A0x1234567890abcdef!2sPasto%2C%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1234567890"
                width="100%" height="100%"
                style="border:0; min-height: 400px;"
                allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</div>

{{-- Redes sociales --}}
<div class="tg-category-label">📲 Síguenos en redes</div>
<div class="text-center mb-2">
    <a href="#" class="tg-social-grande">
        <i class="bi bi-facebook"></i> Facebook
    </a>
    <a href="#" class="tg-social-grande">
        <i class="bi bi-instagram"></i> Instagram
    </a>
    <a href="#" class="tg-social-grande">
        <i class="bi bi-whatsapp"></i> WhatsApp
    </a>
    <a href="#" class="tg-social-grande">
        <i class="bi bi-tiktok"></i> TikTok
    </a>
    <a href="#" class="tg-social-grande">
        <i class="bi bi-youtube"></i> YouTube
    </a>
</div>

{{-- Cita --}}
<div class="tg-quote">
    <p>"Una buena taza de café siempre merece una buena conversación — escríbenos."</p>
    <span>— Tinto Nariño, Pasto</span>
</div>

@endsection