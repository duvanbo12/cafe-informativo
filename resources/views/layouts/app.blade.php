<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            background-color: rgba(66, 59, 51, 0.96);
            background-image: url('https://static.vecteezy.com/system/resources/previews/004/466/302/non_2x/brown-and-white-background-design-clean-and-modern-brown-background-illustration-vector.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-blend-mode: overlay;
        }

        /* Estilos del Navbar Artesanal */
        .artisanal-navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #f0f0f0;
            padding: 0.8rem 0;
            position: sticky;
            top: 0;
            z-index: 1030;
        }
        .artisanal-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            font-weight: 700;
            color: #1a1a1a;
            text-decoration: none;
            letter-spacing: 0.5px;
            white-space: nowrap;
        }
        .artisanal-brand span {
            display: block;
            font-size: 0.6rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #6c757d;
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
        }
        .artisanal-nav-link {
            font-family: 'DM Sans', sans-serif;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #333333 !important;
            margin-right: 1.2rem;
            transition: color 0.2s;
        }
        .artisanal-nav-link:hover {
            color: #000000 !important;
        }
        .artisanal-btn-order {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            padding: 0.7rem 1.2rem;
            text-decoration: none;
            transition: background-color 0.2s;
            display: inline-block;
        }
        .artisanal-btn-order:hover {
            background-color: #333333;
            color: #ffffff;
        }

        .tg-footer-main {
            background-color: #000000;
            color: #f4c79e;
            padding: 2.5rem 0 0;
            margin-top: 3rem;
            font-family: 'DM Sans', sans-serif;
        }
        .tg-footer-logo {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            font-style: italic;
            color: #e8c98a;
            line-height: 1;
            margin-bottom: 0.3rem;
        }
        .tg-footer-logo span {
            display: block;
            font-size: 0.7rem;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #a07050;
            font-style: normal;
            font-family: 'DM Sans', sans-serif;
            font-weight: 300;
            margin-top: 0.2rem;
        }
        .tg-footer-tagline {
            font-size: 0.78rem;
            color: #a07050;
            font-weight: 300;
            letter-spacing: 1px;
            margin-top: 0.6rem;
        }
        .tg-footer-heading {
            font-size: 0.65rem;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #fffdfa;
            margin-bottom: 1rem;
            font-weight: 400;
        }
        .tg-footer-link {
            display: block;
            color: #ffffff;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 300;
            margin-bottom: 0.4rem;
            transition: color 0.2s;
        }
        .tg-footer-link:hover { color: #e8c98a; }
        .tg-footer-contact p {
            font-size: 0.85rem;
            font-weight: 300;
            color: #fffaf6;
            margin-bottom: 0.4rem;
        }
        .tg-footer-contact i {
            color: #ffedcb;
            margin-right: 0.4rem;
            font-size: 0.9rem;
        }
        .tg-social-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px; height: 36px;
            border-radius: 50%;
            border: 1px solid #7a4a2a;
            background: #3d0a0a;
            color: #c4956a;
            font-size: 1rem;
            text-decoration: none;
            transition: all 0.2s;
            margin-right: 0.4rem;
            margin-bottom: 0.4rem;
        }
        .tg-social-btn:hover {
            background: #d4a855;
            border-color: #d4a855;
            color: #1e0e04;
        }
        .tg-footer-divider {
            border-color: #7a4a2a;
            margin: 2rem 0 0;
        }
        .tg-footer-bottom {
            background: #48372c;
            padding: 0.9rem 0;
            text-align: center;
            font-size: 0.72rem;
            color: #ffffff;
            letter-spacing: 1px;
            font-family: 'DM Sans', sans-serif;
        }
        .tg-footer-bottom strong { color: #ffffff; }
    </style>
</head>
<body>

{{-- Navbar Artesanal Unificado --}}
<nav class="navbar navbar-expand-lg artisanal-navbar">
    <div class="container">
        <!-- Logo con imagen desde la carpeta public/image/ con la T mayúscula -->
        <a class="artisanal-brand d-flex align-items-center gap-2 text-decoration-none" href="{{ route('inicio') }}">
            <img src="{{ asset('image/Tinto_narino.jpg') }}" alt="Logo" style="height: 42px; width: 42px; min-width: 42px; object-fit: cover;" class="rounded-circle shadow-sm bg-white">
            <div>
                Tinto Nariño
                <span>Cafetería de especialidad</span>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuArtesanal">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuArtesanal">
            <!-- Enlaces Centrados / Izquierda -->
            <ul class="navbar-nav mx-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link artisanal-nav-link" href="{{ route('inicio') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link artisanal-nav-link" href="{{ route('menu') }}">Menú</a></li>
                <li class="nav-item"><a class="nav-link artisanal-nav-link" href="{{ route('nosotros') }}">Nosotros</a></li>
                <li class="nav-item"><a class="nav-link artisanal-nav-link" href="{{ route('contacto') }}">Contacto</a></li>
                
                @auth
                    <li class="nav-item"><a class="nav-link artisanal-nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link artisanal-nav-link" href="{{ route('mensajes') }}">Mensajes</a></li>
                @endauth
            </ul>

            <!-- Botón CTA y Usuario a la Derecha -->
            <div class="d-flex align-items-center gap-3">
                <a href="{{ route('menu') }}" class="artisanal-btn-order">¡Ordene ahora!</a>

                @guest
                    <div class="d-flex gap-2">
                        <a href="{{ route('login') }}" class="btn btn-outline-dark btn-sm text-uppercase fw-semibold" style="font-size: 0.75rem; letter-spacing: 1px;">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-dark btn-sm text-uppercase fw-semibold" style="font-size: 0.75rem; letter-spacing: 1px;">Registro</a>
                    </div>
                @endguest

                @auth
                    <div class="dropdown">
                        <button class="btn btn-light btn-sm dropdown-toggle text-uppercase fw-semibold" type="button" data-bs-toggle="dropdown" style="font-size: 0.75rem; letter-spacing: 1px;">
                            <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger text-uppercase fw-semibold" style="font-size: 0.7rem;">
                                        <i class="bi bi-box-arrow-right"></i> Salir
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>

{{-- Contenido --}}
<div class="container py-5">
    @yield('content')
</div>

{{-- Footer --}}
<footer class="tg-footer-main">
    <div class="container">
        <div class="row g-4 pb-3">
            <div class="col-md-4">
                <div class="tg-footer-logo">
                    ☕ Tinto Nariño
                    <span>Pasto, Nariño — Colombia</span>
                </div>
                <p class="tg-footer-tagline">El mejor café del sur de Colombia</p>
                <div class="mt-3">
                    <a href="#" class="tg-social-btn" title="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="tg-social-btn" title="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="tg-social-btn" title="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    <a href="#" class="tg-social-btn" title="TikTok"><i class="bi bi-tiktok"></i></a>
                    <a href="#" class="tg-social-btn" title="YouTube"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <div class="col-md-2">
                <p class="tg-footer-heading">Navegación</p>
                <a href="{{ route('inicio') }}" class="tg-footer-link">Inicio</a>
                <a href="{{ route('menu') }}" class="tg-footer-link">Menú</a>
                <a href="{{ route('nosotros') }}" class="tg-footer-link">Nosotros</a>
                <a href="{{ route('contacto') }}" class="tg-footer-link">Contacto</a>
            </div>
            <div class="col-md-3 tg-footer-contact">
                <p class="tg-footer-heading">Contáctanos</p>
                <p><i class="bi bi-geo-alt-fill"></i> Pasto, Nariño, Colombia</p>
                <p><i class="bi bi-telephone-fill"></i> +57 300 000 0000</p>
                <p><i class="bi bi-envelope-fill"></i> info@tintonarino.com</p>
                <p><i class="bi bi-whatsapp"></i> WhatsApp: 300 000 0000</p>
            </div>
            <div class="col-md-3 tg-footer-contact">
                <p class="tg-footer-heading">Horarios</p>
                <p><i class="bi bi-clock-fill"></i> Lunes a Viernes</p>
                <p style="padding-left:1.3rem; margin-top:-0.2rem;">7:00 am — 8:00 pm</p>
                <p><i class="bi bi-clock-fill"></i> Sábados y Domingos</p>
                <p style="padding-left:1.3rem; margin-top:-0.2rem;">8:00 am — 6:00 pm</p>
            </div>
        </div>
    </div>
    <hr class="tg-footer-divider">
    <div class="tg-footer-bottom">
        © 2026 Tinto Nariño. Todos los derechos reservados. —
        Desarrollado por: <strong>Duvan Botina, </strong><strong>Miguel Legarda, </strong><strong>Luis Dorado</strong> & <strong>Karen Ortega</strong>
    </div>
</footer>

<script> 
$(document).ready(function(){
    $('#tablaMensajes').DataTable({
        language: {
            emptyTable: "No hay mensajes registrados."
        }
    });
})
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>