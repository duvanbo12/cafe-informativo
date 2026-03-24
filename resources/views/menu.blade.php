@extends('layouts.app')

@section('title', 'Menú - Tinto Nariño')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500&display=swap');

    .tg-menu-header {
        text-align: center;
        margin-bottom: 2.5rem;
    }
    .tg-menu-header .tg-hero-tag {
        border: 1px solid #d4a855; color: #d4a855;
        font-size: 0.6rem; letter-spacing: 4px;
        text-transform: uppercase; padding: 3px 14px;
        border-radius: 20px; margin-bottom: 1rem;
        display: inline-block;
    }
    .tg-menu-header h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.6rem; color: #fbfbfb;
        font-style: italic; margin-bottom: 0.3rem;
    }
    .tg-menu-header p {
        color: #ffffff; font-size: 0.82rem;
        letter-spacing: 3px; text-transform: uppercase;
        font-weight: 300;
    }
    .tg-line {
        width: 50px; height: 1px;
        background: #d4a855; margin: 0.8rem auto 0;
    }

    .tg-category-label {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.5rem; color: #ffe5d6;
        font-style: italic;
        border-bottom: 1px solid #d4a855;
        padding-bottom: 0.4rem;
        margin-bottom: 1.5rem;
        margin-top: 2.5rem;
    }

    .tg-product-card {
        background: rgba(255, 248, 240, 0.88);
        border: 1px solid #e8d5bc;
        border-radius: 10px;
        overflow: hidden;
        height: 100%;
        transition: transform 0.2s, box-shadow 0.2s;
        backdrop-filter: blur(4px);
    }
    .tg-product-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(59, 26, 8, 0.15);
    }
    .tg-product-card img {
        width: 100%; height: 160px;
        object-fit: cover;
        filter: brightness(0.88) saturate(1.1);
    }
    .tg-product-body {
        padding: 1rem 1.1rem;
    }
    .tg-product-body h5 {
        font-family: 'Cormorant Garamond', serif;
        color: #3b1a08; font-size: 1.05rem;
        margin-bottom: 0.25rem; font-weight: 600;
    }
    .tg-product-body p {
        color: #9a7055; font-size: 0.78rem;
        font-weight: 300; margin-bottom: 0.6rem;
        line-height: 1.5;
    }
    .tg-product-price {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.85rem; font-weight: 500;
        color: #7b3a17; letter-spacing: 1px;
    }

    .tg-quote {
        border-left: 2px solid #d4a855;
        padding: 1rem 1.5rem;
        background: rgba(255, 255, 255, 0.95);
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
    <h1>Nuestro Menú</h1>
    <p>Sabor auténtico en cada producto</p>
    <div class="tg-line"></div>
</div>

{{-- Categoría: Bebidas --}}
<div class="tg-category-label">☕ Bebidas</div>
<div class="row g-3 mb-2">
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            <img src="https://www.esariri.com/wp-content/uploads/2022/11/Diseno-sin-titulo-20.jpg" alt="Tinto">
            <div class="tg-product-body">
                <h5>Tinto Nariñense</h5>
                <p>Café negro tradicional, cultivado en las montañas de Nariño.</p>
                <span class="tg-product-price">$ 2.000</span>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=400&q=80" alt="Capuchino">
            <div class="tg-product-body">
                <h5>Capuchino</h5>
                <p>Espresso con leche vaporizada y espuma cremosa.</p>
                <span class="tg-product-price">$ 5.000</span>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=400&q=80" alt="Latte">
            <div class="tg-product-body">
                <h5>Café Latte</h5>
                <p>Espresso suave con leche caliente y toque de vainilla.</p>
                <span class="tg-product-price">$ 5.500</span>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            <img src="https://kava1.lt/wp-content/uploads/2022/12/preparare-mocaccino-a-casa.jpg" alt="Mocaccino">
            <div class="tg-product-body">
                <h5>Mocaccino</h5>
                <p>Combinación de espresso, chocolate y leche cremosa.</p>
                <span class="tg-product-price">$ 6.000</span>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfLoMwxpcEEstK3T79s66qxszFmljQV2NNXQ&s" alt="Café frío">
            <div class="tg-product-body">
                <h5>Café Frío</h5>
                <p>Cold brew preparado en frío durante 12 horas.</p>
                <span class="tg-product-price">$ 6.500</span>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            <img src="https://elrinconcolombiano.com/wp-content/uploads/2024/05/Chocolate-Caliente-receta-colombiana.jpg" alt="Chocolate">
            <div class="tg-product-body">
                <h5>Chocolate Caliente</h5>
                <p>Chocolate artesanal con leche entera y canela.</p>
                <span class="tg-product-price">$ 4.500</span>
            </div>
        </div>
    </div>
</div>

{{-- Categoría: Comidas --}}
<div class="tg-category-label">🥐 Comidas</div>
<div class="row g-3 mb-2">
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/056/932/616/small/a-close-up-of-freshly-baked-croissants-dusted-with-flour-emitting-steam-in-a-warm-setting-photo.jpg" alt="Croissant">
            <div class="tg-product-body">
                <h5>Croissant de Mantequilla</h5>
                <p>Hojaldre artesanal horneado cada mañana.</p>
                <span class="tg-product-price">$ 4.000</span>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            <img src="https://lasoleta.com/wp-content/uploads/2020/06/IMG_3916.jpg" alt="Pastel">
            <div class="tg-product-body">
                <h5>Pastel de Chocolate</h5>
                <p>Bizcocho húmedo con cobertura de ganache oscuro.</p>
                <span class="tg-product-price">$ 6.000</span>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            <img src="https://images.unsplash.com/photo-1558961363-fa8fdf82db35?w=400&q=80" alt="Galletas">
            <div class="tg-product-body">
                <h5>Galletas de Avena</h5>
                <p>Snack saludable con avena, miel y chips de chocolate.</p>
                <span class="tg-product-price">$ 2.500</span>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            <img src="https://img.freepik.com/foto-gratis/vista-superior-tostadas-mermelada-rosa_23-2148381099.jpg" alt="Tostada">
            <div class="tg-product-body">
                <h5>Tostada con Mermelada</h5>
                <p>Pan artesanal tostado con mermelada de mora nariñense.</p>
                <span class="tg-product-price">$ 3.500</span>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            <img src="https://radionacional-v3.s3.amazonaws.com/s3fs-public/node/article/field_image/PAN%20DE%20MAIZ%20DE%20LA%20MART%C3%8DNEZ.jpg" alt="Muffin">
            <div class="tg-product-body">
                <h5>Pan de Maíz</h5>
                <p>Pan de maíz nariñense, suave y con sabor casero.</p>
                <span class="tg-product-price">$ 4.500</span>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="tg-product-card">
            <img src="https://images.rappi.com/restaurants_background/empanaditasdepipian-1661364004384.jpg" alt="Empanada">
            <div class="tg-product-body">
                <h5>Empanada de Pipián</h5>
                <p>Empanada nariñense tradicional, frita y crujiente.</p>
                <span class="tg-product-price">$ 2.000</span>
            </div>
        </div>
    </div>
</div>

{{-- Cita --}}
<div class="tg-quote">
    <p>"Cada producto está pensado para acompañar el mejor momento del día — tu taza de café."</p>
    <span>— Tinto Nariño, Pasto</span>
</div>

@endsection