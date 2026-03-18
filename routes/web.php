<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginacontroller;
use App\Http\Controllers\pqrscontroller;

Route::get('/', [paginacontroller::class, 'inicio'])->name('inicio'); 

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
