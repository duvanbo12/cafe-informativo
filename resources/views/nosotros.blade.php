@extends('layouts.app')

@section('title', 'Nosotros - Tinto Galeras')

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
        font-size: 2.6rem; color: #fcf3ee;
        font-style: italic; margin-bottom: 0.3rem;
    }
    .tg-menu-header p {
        color: #f8f1ed; font-size: 0.82rem;
        letter-spacing: 3px; text-transform: uppercase; font-weight: 300;
    }
    .tg-line {
        width: 50px; height: 1px;
        background: #d4a855; margin: 0.8rem auto 0;
    }

    /* Historia */
    .tg-historia {
        display: flex; gap: 2rem;
        align-items: center; margin-bottom: 3rem;
        flex-wrap: wrap;
    }
    .tg-historia img {
        width: 100%; height: 300px;
        object-fit: cover; border-radius: 10px;
        filter: brightness(0.88) saturate(1.1);
    }
    .tg-historia-text .tg-section-label {
        font-size: 0.65rem; letter-spacing: 4px;
        text-transform: uppercase; color: #fffbf8;
        margin-bottom: 0.4rem; font-weight: 400;
        display: block;
    }
    .tg-historia-text h2 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.9rem; color: #ffd0b6;
        font-style: italic; margin-bottom: 1rem; line-height: 1.2;
    }
    .tg-historia-text p {
        color: #ffffff; font-size: 0.9rem;
        line-height: 1.9; font-weight: 300;
    }

    /* Valores */
    .tg-category-label {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.5rem; color: #3b1a08;
        font-style: italic;
        border-bottom: 1px solid #d4a855;
        padding-bottom: 0.4rem;
        margin-bottom: 1.5rem;
        margin-top: 1rem;
    }
    .tg-valor-card {
        background: rgba(255, 248, 240, 0.88);
        border: 1px solid #e8d5bc;
        border-radius: 10px; padding: 1.4rem;
        text-align: center; height: 100%;
        transition: transform 0.2s, box-shadow 0.2s;
        backdrop-filter: blur(4px);
    }
    .tg-valor-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(59, 26, 8, 0.12);
    }
    .tg-valor-card h5 {
        font-family: 'Cormorant Garamond', serif;
        color: #3b1a08; font-size: 1rem; margin-bottom: 0.3rem;
    }
    .tg-valor-card p {
        color: #9a7055; font-size: 0.78rem; font-weight: 300; margin: 0;
    }

    /* Equipo */
    .tg-equipo-card {
        background: rgba(255, 248, 240, 0.88);
        border: 1px solid #e8d5bc;
        border-radius: 10px; overflow: hidden;
        text-align: center; height: 100%;
        transition: transform 0.2s;
        backdrop-filter: blur(4px);
    }
    .tg-equipo-card:hover { transform: translateY(-4px); }
    .tg-equipo-card img {
        width: 100%; height: 180px;
        object-fit: cover;
        filter: brightness(0.88) saturate(1.0);
    }
    .tg-equipo-body { padding: 1rem; }
    .tg-equipo-body h5 {
        font-family: 'Cormorant Garamond', serif;
        color: #3b1a08; font-size: 1rem; margin-bottom: 0.15rem;
    }
    .tg-equipo-body span {
        font-size: 0.72rem; color: #d4a855;
        letter-spacing: 2px; text-transform: uppercase;
        font-weight: 300; font-family: 'DM Sans', sans-serif;
    }

    /* Cita */
    .tg-quote {
        border-left: 2px solid #d4a855;
        padding: 1rem 1.5rem;
        background: rgba(255, 248, 240, 0.75);
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

{{-- Encabezado --}}
<div class="tg-menu-header">
    <div class="tg-hero-tag">Pasto, Nariño — Colombia</div>
    <h1>Sobre Nosotros</h1>
    <p>Pasión por el café nariñense</p>
    <div class="tg-line"></div>
</div>

{{-- Historia --}}
<div class="tg-historia row">
    <div class="col-md-5 text-center">
        <img src="https://www.cideu.org/wp-content/uploads/Pasto1.jpg" class="img-fluid mb-3">
        <img src="https://buengusto.co/wp-content/uploads/2024/04/CUON-PASTO-1.jpg" class="img-fluid">
    </div>
    <div class="col-md-6 tg-historia-text">
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

{{-- Valores --}}
<div class="tg-category-label">🌿 Nuestros valores</div>
<div class="row g-3 mb-5">
    <div class="col-md-3 col-sm-6">
        <div class="tg-valor-card">
            <div style="font-size:1.6rem; margin-bottom:0.6rem;">☕</div>
            <h5>Calidad</h5>
            <p>Granos seleccionados a mano de las mejores fincas nariñenses.</p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="tg-valor-card">
            <div style="font-size:1.6rem; margin-bottom:0.6rem;">🌱</div>
            <h5>Sostenibilidad</h5>
            <p>Apoyamos prácticas agrícolas responsables con el medio ambiente.</p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="tg-valor-card">
            <div style="font-size:1.6rem; margin-bottom:0.6rem;">🤝</div>
            <h5>Comunidad</h5>
            <p>Comercio justo con los caficultores de nuestra región.</p>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="tg-valor-card">
            <div style="font-size:1.6rem; margin-bottom:0.6rem;">❤️</div>
            <h5>Pasión</h5>
            <p>Cada taza es preparada con dedicación y amor por nuestro oficio.</p>
        </div>
    </div>
</div>

{{-- Cita --}}
<div class="tg-quote">
    <p>"El café une personas, historias y culturas — eso es lo que somos en Tinto Galeras."</p>
    <span>— Duvan Botina & Miguel Legarda</span>
</div>

<hr class="my-5">

{{-- Formulario PQRS --}}
<h3 class="text-center mb-4" style="color: #fcf3ee; font-family: 'Cormorant Garamond', serif; font-style: italic;">
    Formulario de PQRS
</h3>

@if(session('success'))
    <div class="alert alert-success text-center">{{ session('success') }}</div>
@endif

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow p-4">
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
                        <option value="Queja"      {{ old('tipo') == 'Queja'       ? 'selected' : '' }}>Queja</option>
                        <option value="Petición"   {{ old('tipo') == 'Petición'    ? 'selected' : '' }}>Petición</option>
                        <option value="Felicitación" {{ old('tipo') == 'Felicitación' ? 'selected' : '' }}>Felicitación</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mensaje</label>
                    <textarea name="mensaje" class="form-control @error('mensaje') is-invalid @enderror" rows="4" required>{{ old('mensaje') }}</textarea>
                    @error('mensaje') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input @error('acepto') is-invalid @enderror" type="checkbox" name="acepto" value="1" {{ old('acepto') ? 'checked' : '' }} required>
                    <label class="form-check-label">Acepto términos y condiciones</label>
                    @error('acepto') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="btn btn-dark w-100">
                    Enviar
                </button>
            </form>
            <small class="text-muted mt-2 d-block">
                Este formulario es únicamente informativo.
            </small>
        </div>
    </div>
</div>

@endsection