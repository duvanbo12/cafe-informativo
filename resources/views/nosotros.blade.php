@extends('layouts.app')

@section('title', 'Nosotros - Tinto Galeras')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500;700&display=swap');

    /* Fondo tipo avena/crema suave difuminando a un café profundo */
    body {
        background: linear-gradient(135deg, #f5ebd0 0%, #d4b595 40%, #5c3a21 85%, #2c150b 100%);
        background-attachment: fixed;
        font-family: 'DM Sans', sans-serif;
        color: #2c150b;
    }

    .tg-menu-header {
        text-align: center;
        margin-bottom: 3rem;
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
    .tg-line {
        width: 60px; height: 1px;
        background: #5c3a21; margin: 1rem auto 0;
    }

    /* HISTORIA CON EFECTO VIDRIADO CLARO */
    .tg-historia-box {
        background: rgba(255, 255, 255, 0.35);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.5);
        border-radius: 16px;
        padding: 2.5rem;
        box-shadow: 0 8px 32px 0 rgba(44, 21, 11, 0.15);
        margin-bottom: 4rem;
    }
    .tg-historia img {
        width: 100%; height: 210px;
        object-fit: cover; border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.6);
        transition: transform 0.3s ease;
    }
    .tg-historia img:hover {
        transform: scale(1.02);
    }
    .tg-historia-text .tg-section-label {
        font-size: 0.65rem; letter-spacing: 3px;
        text-transform: uppercase; color: #7a4f30;
        margin-bottom: 0.5rem; font-weight: 600;
        display: block;
    }
    .tg-historia-text h2 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.1rem; color: #2c150b;
        font-style: italic; margin-bottom: 1.2rem; line-height: 1.2;
    }
    .tg-historia-text p {
        color: #4a2c1d; font-size: 0.92rem;
        line-height: 1.8; font-weight: 400;
    }

    /* TÍTULOS DE SECCIÓN */
    .tg-category-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.8rem; color: #2c150b;
        font-style: italic;
        text-align: center;
        margin-bottom: 2rem;
    }

    /* TARJETAS DE VALORES */
    .tg-valor-card {
        background: rgba(255, 255, 255, 0.4);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: 14px; padding: 1.8rem 1.2rem;
        text-align: center; height: 100%;
        transition: transform 0.25s ease, background 0.25s ease, border-color 0.25s ease;
        box-shadow: 0 4px 20px rgba(44, 21, 11, 0.1);
    }
    .tg-valor-card:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.6);
        border-color: #5c3a21;
    }
    .tg-valor-card h5 {
        font-family: 'Cormorant Garamond', serif;
        color: #2c150b; font-size: 1.2rem; margin-bottom: 0.4rem;
        font-weight: 600;
    }
    .tg-valor-card p {
        color: #5c3a21; font-size: 0.8rem; font-weight: 400; margin: 0;
        line-height: 1.5;
    }

    /* CITA DESTACADA */
    .tg-quote {
        border-left: 3px solid #5c3a21;
        padding: 1.2rem 1.8rem;
        background: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
        border-radius: 0 12px 12px 0;
        margin: 3rem 0;
    }
    .tg-quote p {
        font-family: 'Cormorant Garamond', serif;
        font-style: italic; font-size: 1.2rem;
        color: #2c150b; line-height: 1.6; margin: 0;
    }
    .tg-quote span {
        display: block; margin-top: 0.5rem;
        font-size: 0.75rem; color: #5c3a21;
        letter-spacing: 2px; font-weight: 600;
    }

    /* FORMULARIO PQRS (ESTILO CRISTAL CLARO) */
    .tg-pqrs-container {
        background: rgba(255, 255, 255, 0.45);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: 16px;
        padding: 2.5rem;
        box-shadow: 0 8px 32px 0 rgba(44, 21, 11, 0.15);
        color: #2c150b;
    }
    .tg-pqrs-container .form-label {
        color: #3b200e;
        font-size: 0.85rem;
        font-weight: 600;
    }
    .tg-pqrs-container .form-control, .tg-pqrs-container .form-select {
        background: rgba(255, 255, 255, 0.6);
        border: 1px solid rgba(92, 58, 33, 0.2);
        color: #2c150b;
        border-radius: 10px;
        font-size: 0.9rem;
    }
    .tg-pqrs-container .form-control:focus, .tg-pqrs-container .form-select:focus {
        background: rgba(255, 255, 255, 0.9);
        border-color: #5c3a21;
        color: #2c150b;
        box-shadow: 0 0 0 0.25rem rgba(92, 58, 33, 0.15);
    }
    .tg-pqrs-container option {
        background: #f5ebd0;
        color: #2c150b;
    }
    .tg-btn-enviar {
        background: #5c3a21;
        color: #f5ebd0;
        font-weight: 600;
        border: none;
        border-radius: 10px;
        padding: 10px;
        letter-spacing: 1px;
        transition: background 0.2s;
    }
    .tg-btn-enviar:hover {
        background: #3b200e;
        color: #fff;
    }
</style>

{{-- Encabezado --}}
<div class="tg-menu-header">
    <div class="tg-hero-tag">Pasto, Nariño — Colombia</div>
    <h1>Sobre Nosotros</h1>
    <p>Pasión por el café nariñense</p>
    <div class="tg-line"></div>
</div>

<div class="container">
    {{-- Historia en contenedor Glassmorphism --}}
    <div class="tg-historia-box">
        <div class="row align-items-center g-4">
            <div class="col-lg-5 text-center">
                <div class="row g-2">
                    <div class="col-6">
                        <img src="https://www.cideu.org/wp-content/uploads/Pasto1.jpg" class="img-fluid shadow-sm" alt="Pasto">
                    </div>
                    <div class="col-6">
                        <img src="https://buengusto.co/wp-content/uploads/2024/04/CUON-PASTO-1.jpg" class="img-fluid shadow-sm" alt="Café de Nariño">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 tg-historia-text">
                <span class="tg-section-label">Nuestra historia</span>
                <h2>Nacimos entre montañas y granos de café</h2>
                <p>
                    Tinto Galeras nació con una idea sencilla: llevar el auténtico sabor del café nariñense
                    a quienes lo aprecian. Ubicados en Pasto, al pie del volcán Galeras, somos un espacio
                    donde la tradición cafetera del sur de Colombia cobra vida en cada taza.
                </p>
                <p class="mt-2">
                    Trabajamos directamente con caficultores locales para garantizar granos de la más alta
                    calidad, cultivados a más de 1.800 metros de altura.
                </p>
            </div>
        </div>
    </div>

    {{-- Valores --}}
    <div class="tg-category-title">🌿 Nuestros Valores</div>
    <div class="row g-4 mb-5">
        <div class="col-md-3 col-sm-6">
            <div class="tg-valor-card">
                <div style="font-size:1.8rem; margin-bottom:0.6rem;">☕</div>
                <h5>Calidad</h5>
                <p>Granos seleccionados a mano de las mejores fincas nariñenses.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="tg-valor-card">
                <div style="font-size:1.8rem; margin-bottom:0.6rem;">🌱</div>
                <h5>Sostenibilidad</h5>
                <p>Apoyamos prácticas agrícolas responsables con el medio ambiente.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="tg-valor-card">
                <div style="font-size:1.8rem; margin-bottom:0.6rem;">🤝</div>
                <h5>Comunidad</h5>
                <p>Comercio justo con los caficultores de nuestra región.</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="tg-valor-card">
                <div style="font-size:1.8rem; margin-bottom:0.6rem;">❤️</div>
                <h5>Pasión</h5>
                <p>Cada taza es preparada con dedicación y amor por nuestro oficio.</p>
            </div>
        </div>
    </div>

    {{-- Cita --}}
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="tg-quote">
                <p>"El café une personas, historias y culturas — eso es lo que somos en Tinto Galeras."</p>
                <span>— Duvan Botina & Miguel Legarda</span>
            </div>
        </div>
    </div>

    <hr style="border-color: rgba(92, 58, 33, 0.2); margin: 4rem 0;">

    {{-- Buzón de PQRS Protegido con @auth --}}
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <div class="tg-category-title">📬 Buzón de PQRS</div>
            <p class="text-center mb-4" style="font-size: 0.85rem; color: #5c3a21; font-weight: 500;">Tus comentarios nos ayudan a mejorar cada día</p>

            @if(session('success'))
                <div class="alert alert-success text-center mb-4" style="background: rgba(40, 167, 69, 0.2); border: 1px solid rgba(40, 167, 69, 0.4); color: #155724; border-radius: 10px;">
                    {{ session('success') }}
                </div>
            @endif

            <div class="tg-pqrs-container">
                @auth
                    {{-- SI HA INICIADO SESIÓN: Muestra el formulario completo --}}
                    <form action="{{ route('pqrs.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nombres</label>
                                <input type="text" name="nombres" class="form-control @error('nombres') is-invalid @enderror" value="{{ old('nombres') }}" required>
                                @error('nombres') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Apellidos</label>
                                <input type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" value="{{ old('apellidos') }}" required>
                                @error('apellidos') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Correo electrónico</label>
                            <input type="email" name="correos" class="form-control @error('correos') is-invalid @enderror" value="{{ old('correos') }}" required>
                            @error('correos') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tipo de solicitud</label>
                            <select name="tipo" class="form-select">
                                <option value="Queja" {{ old('tipo') == 'Queja' ? 'selected' : '' }}>Queja</option>
                                <option value="Petición" {{ old('tipo') == 'Petición' ? 'selected' : '' }}>Petición</option>
                                <option value="Felicitación" {{ old('tipo') == 'Felicitación' ? 'selected' : '' }}>Felicitación</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mensaje</label>
                            <textarea name="mensaje" class="form-control @error('mensaje') is-invalid @enderror" rows="4" required>{{ old('mensaje') }}</textarea>
                            @error('mensaje') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input @error('acepto') is-invalid @enderror" type="checkbox" name="acepto" value="1" {{ old('acepto') ? 'checked' : '' }} required>
                            <label class="form-check-label" style="font-size: 0.85rem; color: #3b200e; font-weight: 500;">Acepto términos y condiciones</label>
                            @error('acepto') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <button type="submit" class="tg-btn-enviar w-100">
                            Enviar Solicitud
                        </button>
                    </form>
                @else
                    {{-- SI ES VISITANTE (NO HA INICIADO SESIÓN): Muestra aviso elegante con botones de acceso --}}
                    <div class="text-center py-4 px-3">
                        <div style="font-size: 2.5rem; margin-bottom: 0.8rem;">🔒</div>
                        <h4 style="font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; color: #2c150b; font-weight: 600; margin-bottom: 0.5rem;">Se requiere iniciar sesión</h4>
                        <p class="mb-4" style="font-size: 0.88rem; color: #5c3a21;">Para enviar una Petición, Queja o Reclamo y dar un seguimiento adecuado, por favor ingresa a tu cuenta o regístrate.</p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="{{ route('login') }}" class="btn tg-btn-enviar px-4 text-decoration-none">Iniciar Sesión</a>
                            <a href="{{ route('register') }}" class="btn btn-outline-dark px-4" style="border-color: #5c3a21; color: #5c3a21; font-weight: 600; border-radius: 10px;">Registrarse</a>
                        </div>
                    </div>
                @endauth

                <small class="text-center d-block mt-3" style="color: #7a4f30; font-size: 0.75rem;">
                    Este buzón es seguro y exclusivo para nuestra comunidad registrada.
                </small>
            </div>
        </div>
    </div>
</div>

@endsection