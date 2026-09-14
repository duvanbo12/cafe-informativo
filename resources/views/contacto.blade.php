@extends('layouts.app')

@section('title', 'Contacto - Tinto Nariño')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500;600&display=swap');

    /* Fondo general unificado con el resto de vistas (avena a café profundo) */
    body {
        background: linear-gradient(135deg, #f5ebd0 0%, #d4b595 40%, #5c3a21 85%, #2c150b 100%);
        background-attachment: fixed;
        font-family: 'DM Sans', sans-serif;
        color: #2c150b;
    }

    .contact-hero {
        text-align: center;
        margin-bottom: 3rem;
        padding-top: 1rem;
    }
    .contact-hero .tag {
        border: 1px solid rgba(92, 58, 33, 0.4);
        color: #5c3a21;
        font-size: 0.65rem;
        letter-spacing: 3px;
        text-transform: uppercase;
        padding: 4px 14px;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 0.8rem;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(8px);
        font-weight: 600;
    }
    .contact-hero h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.8rem;
        color: #2c150b;
        font-style: italic;
        margin-bottom: 0.2rem;
        text-shadow: 0 2px 15px rgba(255, 255, 255, 0.4);
    }
    .contact-hero p {
        color: #5c3a21;
        font-size: 0.85rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 500;
    }
    .tg-line {
        width: 50px; height: 1px;
        background: #5c3a21;
        margin: 0.8rem auto 0;
        opacity: 0.4;
    }

    /* Info cards con efecto cristal claro */
    .info-card {
        background: rgba(255, 255, 255, 0.4);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: 14px;
        padding: 1.8rem 1.2rem;
        text-align: center;
        height: 100%;
        transition: all 0.3s ease;
        box-shadow: 0 8px 32px 0 rgba(44, 21, 11, 0.12);
    }
    .info-card:hover {
        background: rgba(255, 255, 255, 0.65);
        border-color: #5c3a21;
        transform: translateY(-4px);
        box-shadow: 0 12px 35px rgba(44, 21, 11, 0.18);
    }
    .info-card .icon-wrap {
        width: 52px; height: 52px;
        background: rgba(92, 58, 33, 0.08);
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 1rem;
        border: 1px solid rgba(92, 58, 33, 0.2);
    }
    .info-card i {
        font-size: 1.3rem;
        color: #5c3a21;
    }
    .info-card h5 {
        font-family: 'Cormorant Garamond', serif;
        color: #2c150b;
        font-size: 1.2rem;
        margin-bottom: 0.3rem;
        font-weight: 600;
    }
    .info-card p, .info-card a {
        color: #4a2c1d;
        font-size: 0.85rem;
        font-weight: 400;
        margin: 0;
        text-decoration: none;
        line-height: 1.6;
    }
    .info-card a:hover { color: #5c3a21; font-weight: 500; }

    /* Mapa */
    .map-wrapper {
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.6);
        box-shadow: 0 8px 32px 0 rgba(44, 21, 11, 0.12);
        background: rgba(255, 255, 255, 0.4);
        padding: 6px;
        backdrop-filter: blur(16px);
    }
    .map-wrapper iframe {
        border-radius: 12px;
    }

    /* Sección redes estilo cristal claro */
    .redes-section {
        background: rgba(255, 255, 255, 0.4);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: 16px;
        padding: 2.5rem;
        text-align: center;
        margin-top: 3rem;
        box-shadow: 0 8px 32px 0 rgba(44, 21, 11, 0.12);
    }
    .redes-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.8rem;
        color: #2c150b;
        font-style: italic;
        margin-bottom: 0.2rem;
        font-weight: 600;
    }
    .redes-subtitle {
        color: #5c3a21;
        font-size: 0.78rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 1.8rem;
        font-weight: 500;
    }

    .social-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.6rem 1.4rem;
        border-radius: 50px;
        font-size: 0.82rem;
        font-family: 'DM Sans', sans-serif;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.25s ease;
        margin: 0.3rem;
        border: 1px solid rgba(255, 255, 255, 0.5);
    }
    .social-btn i { font-size: 1rem; }

    /* Botones sociales adaptados a la paleta cálida */
    .social-btn.facebook  { background: rgba(24, 119, 242, 0.12); color: #1855b4; border-color: rgba(24,119,242,0.25); }
    .social-btn.instagram { background: rgba(225, 48, 108, 0.12); color: #b8285c; border-color: rgba(225,48,108,0.25); }
    .social-btn.whatsapp  { background: rgba(37, 211, 102, 0.12); color: #1a7a3e; border-color: rgba(37,211,102,0.25); }
    .social-btn.tiktok    { background: rgba(0, 0, 0, 0.08); color: #2c150b; border-color: rgba(0,0,0,0.15); }
    .social-btn.youtube   { background: rgba(255, 0, 0, 0.12); color: #b31414; border-color: rgba(255,0,0,0.25); }

    .social-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(44, 21, 11, 0.15);
        background: rgba(255, 255, 255, 0.8);
        filter: none;
    }

    /* Cita estilo cristal */
    .tg-quote {
        border-left: 4px solid #5c3a21;
        padding: 1.5rem 1.8rem;
        background: rgba(255, 255, 255, 0.35);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-radius: 0 14px 14px 0;
        margin-top: 3rem;
        box-shadow: 0 8px 32px 0 rgba(44, 21, 11, 0.1);
        border-top: 1px solid rgba(255, 255, 255, 0.6);
        border-right: 1px solid rgba(255, 255, 255, 0.6);
        border-bottom: 1px solid rgba(255, 255, 255, 0.6);
    }
    .tg-quote p {
        font-family: 'Cormorant Garamond', serif;
        font-style: italic;
        font-size: 1.3rem;
        color: #2c150b;
        line-height: 1.5;
        margin: 0;
        font-weight: 500;
    }
    .tg-quote span {
        display: block;
        margin-top: 0.5rem;
        font-size: 0.75rem;
        color: #5c3a21;
        letter-spacing: 2px;
        font-family: 'DM Sans', sans-serif;
        font-weight: 600;
        text-transform: uppercase;
    }

    /* Separador decorativo */
    .deco-divider {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin: 3rem 0;
    }
    .deco-divider::before,
    .deco-divider::after {
        content: '';
        flex: 1;
        height: 1px;
        background: linear-gradient(to right, transparent, rgba(92, 58, 33, 0.3), transparent);
    }
    .deco-divider span {
        color: #5c3a21;
        font-size: 1rem;
    }

    /* Badge horario */
    .horario-badge {
        display: inline-block;
        background: rgba(40, 167, 69, 0.15);
        border: 1px solid rgba(40, 167, 69, 0.3);
        border-radius: 20px;
        padding: 2px 10px;
        font-size: 0.7rem;
        color: #155724;
        margin-top: 0.3rem;
        font-weight: 600;
    }
</style>

{{-- Hero --}}
<div class="contact-hero">
    <div class="tag">Pasto, Nariño — Colombia</div>
    <h1>Contáctanos</h1>
    <p>Estamos para servirte</p>
    <div class="tg-line"></div>
</div>

{{-- Tarjetas de información --}}
<div class="row g-3 mb-5 justify-content-center">
    <div class="col-md-3 col-sm-6">
        <div class="info-card">
            <div class="icon-wrap">
                <i class="bi bi-geo-alt-fill"></i>
            </div>
            <h5>Ubicación</h5>
            <p>Pasto, Nariño<br>Colombia</p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="info-card">
            <div class="icon-wrap">
                <i class="bi bi-telephone-fill"></i>
            </div>
            <h5>Teléfono</h5>
            <p><a href="tel:+573000000000">+57 300 000 0000</a></p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="info-card">
            <div class="icon-wrap">
                <i class="bi bi-envelope-fill"></i>
            </div>
            <h5>Correo</h5>
            <p><a href="mailto:info@tintonarino.com">info@tintonarino.com</a></p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="info-card">
            <div class="icon-wrap">
                <i class="bi bi-clock-fill"></i>
            </div>
            <h5>Horarios</h5>
            <p>
                Lun–Vie: 7am–8pm
                <span class="horario-badge">Abierto</span><br>
                Sáb–Dom: 8am–6pm
            </p>
        </div>
    </div>
</div>

{{-- Separador --}}
<div class="deco-divider"><span>✦</span></div>

{{-- Mapa --}}
<div class="map-wrapper mb-2">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63875.47835082168!2d-77.30150!3d1.21360!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2ed40000000001%3A0x1234567890abcdef!2sPasto%2C%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1234567890"
        width="100%" height="420"
        style="border:0; display:block;"
        allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

{{-- Redes sociales --}}
<div class="redes-section">
    <p class="redes-title">Síguenos en redes</p>
    <p class="redes-subtitle">Únete a nuestra comunidad cafetera</p>
    <div>
        <a href="#" class="social-btn facebook">
            <i class="bi bi-facebook"></i> Facebook
        </a>
        <a href="#" class="social-btn instagram">
            <i class="bi bi-instagram"></i> Instagram
        </a>
        <a href="#" class="social-btn whatsapp">
            <i class="bi bi-whatsapp"></i> WhatsApp
        </a>
        <a href="#" class="social-btn tiktok">
            <i class="bi bi-tiktok"></i> TikTok
        </a>
        <a href="#" class="social-btn youtube">
            <i class="bi bi-youtube"></i> YouTube
        </a>
    </div>
</div>

{{-- Cita --}}
<div class="tg-quote">
    <p>"Una buena taza de café siempre merece una buena conversación — escríbenos."</p>
    <span>— Tinto Nariño, Pasto</span>
</div>

@endsection