<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
    body {
        background-color: rgba(251, 222, 197, 0.58);
        background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20240522/pngtree-abstract-blur-coffee-shop-and-cafe-restaurant-image_15684073.jpg');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-blend-mode: overlay;
    }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7b3a17;">
  <div class="container">
    <a class="navbar-brand fw-bold" style="font-family: 'Playfair Display', serif;" 
       href="{{ route('inicio') }}">☕ Tinto Galeras</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('menu') }}">Menú</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-5">
    @yield('content')
</div>

<footer style="background-color: #3b1a08;" class="text-white text-center p-3">
    © 2026 Proyecto Académico - Programación Avanzada
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>