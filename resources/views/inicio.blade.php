@extends('layouts.app')

@section('title', 'Inicio - Tinto Galeras')

@section('content')

<div class="text-center mb-5">
    <h1 class="display-4 fw-bold" style="font-family: 'Playfair Display', serif; color: #3b1a08;">
        ☕ Tinto Galeras
    </h1>
    <p class="lead text-muted">El mejor café del sur de Colombia</p>
</div>

<div class="row align-items-center mb-5">
    <div class="col-md-6">
        <h2 class="fw-bold" style="color: #7b3f1e;">Bienvenidos</h2>
        <p class="fs-5">
            Bienvenido a <strong>Tinto Galeras</strong> , un lugar donde podrás disfrutar del auténtico sabor del café nariñense. Te invitamos a vivir una experiencia única con cada taza, preparada con dedicación para ofrecerte un café delicioso, aromático y de gran calidad.

Relájate, comparte buenos momentos y déjate conquistar por el sabor de nuestro café.

Tinto Galeras, el lugar perfecto para disfrutar un buen café. ☕
        </p>
        <a href="{{ route('menu') }}" class="btn btn-lg fw-bold text-white" 
           style="background-color: #7b3f1e;">Ver Menú →</a>
    </div>
    <div class="col-md-6">
        <img class="img-fluid rounded-4 shadow-lg" 
             src="https://elcomercio.pe/resizer/v2/NV2GNQEOONBPTL46FQTV5MSQXA.jpg?auth=72c0c489e0d0d730068b6f5dbef28657dddd3eae251ab1f8404285c11f0071cb&width=980&height=654&quality=75&smart=true">
    </div>
</div>

<div class="row text-center mb-5">
    <div class="col-md-4 mb-3">
        <div class="card border-0 shadow p-4 h-100" style="background-color: #fff8f0e8;">
            <h1>☕</h1>
            <h5 class="fw-bold">Café de origen</h5>
            <p class="text-muted">Directo de las montañas de Nariño</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card border-0 shadow p-4 h-100" style="background-color: #fff8f0e3;">
            <h1>🌿</h1>
            <h5 class="fw-bold">100% natural</h5>
            <p class="text-muted">Sin conservantes ni aditivos</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card border-0 shadow p-4 h-100" style="background-color: #fff8f0;">
            <h1>❤️</h1>
            <h5 class="fw-bold">Hecho con amor</h5>
            <p class="text-muted">Tradición cafetera nariñense</p>
        </div>
    </div>
</div>

<div class="text-center mt-4 py-3 rounded-3 text-white" style="background-color: #3b1a08;">
    <small>Proyecto académico — <strong>Duvan Botina</strong> & <strong>Miguel Legarda</strong></small>
</div>

@endsection