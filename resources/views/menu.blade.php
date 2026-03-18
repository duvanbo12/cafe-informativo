@extends('layouts.app')

@section('title', 'Menú')

@section('content')

<h2 class="text-center mb-4">Nuestros Productos</h2>

<div class="row">
    
    <div class="col-md-4">
        
        <div class="card p-3">
            
            <h5>Producto 1</h5>
            <p>Descripción del producto.</p>
        </div>


    <div class="col-md-4">
        <div class="card p-3">
            <h5>Producto 2</h5>
            <p>Descripción del producto.</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Producto 3</h5>
            <p>Descripción del producto.</p>
        </div>
    </div>
</div>

@endsection
