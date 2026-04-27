@extends('layouts.app')

@section('title', 'Contacto - Tinto Nariño')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500&display=swap');

    .contact-hero {
        text-align: center;
        margin-bottom: 3rem;
    }
    .contact-hero .tag {
        border: 1px solid #d4a855;
        color: #d4a855;
        font-size: 0.6rem;
        letter-spacing: 4px;
        text-transform: uppercase;
        padding: 4px 16px;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 1rem;
    }
    .contact-hero h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 3rem;
        color: #fcf3ee;
        font-style: italic;
    }
    .contact-hero p {
        color: #c9b49a;
        font-size: 0.82rem;
        letter-spacing: 3px;
        text-transform: uppercase;
        font-weight: 300;
    }
    .tg-line {
        width: 50px; height: 1px;
        background: #d4a855;
        margin: 0.8rem auto 0;
    }

    /* Info cards */
    .info-card {
        background: rgba(255, 248, 240, 0.06);
        border: 1px solid rgba(212, 168, 85, 0.3);
        border-radius: 14px;
        padding: 1.8rem 1.2rem;
        text-align: center;
        height: 100%;
        transition: all 0.3s ease;
        backdrop-filter: blur(8px);
    }
    .info-card:hover {
        background: rgba(212, 168, 85, 0.1);
        border-color: #d4a855;
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.25);
    }
    .info-card .icon-wrap {
        width: 52px; height: 52px;
        background: rgba(212, 168, 85, 0.15);
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 1rem;
        border: 1px solid rgba(212, 168, 85, 0.4);
    }
    .info-card i {
        font-size: 1.3rem;
        color: #d4a855;
    }
    .info-card h5 {
        font-family: 'Cormorant Garamond', serif;
        color: #fcf3ee;
        font-size: 1rem;
        margin-bottom: 0.3rem;
        font-weight: 600;
    }
    .info-card p, .info-card a {
        color: #c9b49a;
        font-size: 0.82rem;
        font-weight: 300;
        margin: 0;
        text-decoration: none;
        line-height: 1.6;
    }
    .info-card a:hover { color: #d4a855; }

    /* Mapa */
    .map-wrapper {
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(212, 168, 85, 0.3);
        box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    }

    /* Sección redes */
    .redes-section {
        background: rgba(255, 248, 240, 0.04);
        border: 1px solid rgba(212, 168, 85, 0.2);
        border-radius: 16px;
        padding: 2.5rem;
        text-align: center;
        margin-top: 3rem;
    }
    .redes-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.6rem;
        color: #fcf3ee;
        font-style: italic;
        margin-bottom: 0.3rem;
    }
    .redes-subtitle {
        color: #c9b49a;
        font-size: 0.75rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 1.8rem;
    }

    .social-btn {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.6rem 1.4rem;
        border-radius: 50px;
        font-size: 0.82rem;
        font-family: 'DM Sans', sans-serif;
        font-weight: 400;
        text-decoration: none;
        transition: all 0.25s ease;
        margin: 0.3rem;
        border: 1px solid transparent;
    }
    .social-btn i { font-size: 1rem; }

    .social-btn.facebook  { background: rgba(24,  119, 242, 0.15); color: #74a7f5; border-color: rgba(24,119,242,0.3); }
    .social-btn.instagram { background: rgba(225, 48,  108, 0.15); color: #f585a5; border-color: rgba(225,48,108,0.3); }
    .social-btn.whatsapp  { background: rgba(37,  211, 102, 0.15); color: #6dd99a; border-color: rgba(37,211,102,0.3); }
    .social-btn.tiktok    { background: rgba(255, 255, 255, 0.08); color: #e8e8e8; border-color: rgba(255,255,255,0.2); }
    .social-btn.youtube   { background: rgba(255, 0,   0,   0.15); color: #f47f7f; border-color: rgba(255,0,0,0.3); }

    .social-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.25);
        filter: brightness(1.15);
    }

    /* Cita */
    .tg-quote {
        border-left: 2px solid #d4a855;
        padding: 1.2rem 1.8rem;
        background: rgba(212, 168, 85, 0.06);
        border-radius: 0 12px 12px 0;
        backdrop-filter: blur(4px);
        margin-top: 3rem;
    }
    .tg-quote p {
        font-family: 'Cormorant Garamond', serif;
        font-style: italic;
        font-size: 1.15rem;
        color: #e8c98a;
        line-height: 1.7;
        margin: 0;
    }
    .tg-quote span {
        display: block;
        margin-top: 0.5rem;
        font-size: 0.72rem;
        color: #a07050;
        letter-spacing: 2px;
        font-family: 'DM Sans', sans-serif;
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
        background: linear-gradient(to right, transparent, rgba(212,168,85,0.4), transparent);
    }
    .deco-divider span {
        color: #d4a855;
        font-size: 1rem;
    }

    /* Badge horario */
    .horario-badge {
        display: inline-block;
        background: rgba(212, 168, 85, 0.12);
        border: 1px solid rgba(212, 168, 85, 0.3);
        border-radius: 20px;
        padding: 2px 10px;
        font-size: 0.7rem;
        color: #d4a855;
        margin-top: 0.3rem;
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
<div class="row g-3 mb-5">
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
            <a href="tel:+573000000000">+57 300 000 0000</a>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="info-card">
            <div class="icon-wrap">
                <i class="bi bi-envelope-fill"></i>
            </div>
            <h5>Correo</h5>
            <a href="mailto:info@tintonarino.com">info@tintonarino.com</a>
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