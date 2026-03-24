<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginacontroller;
use App\Http\Controllers\pqrscontroller;

Route::get('/', [paginacontroller::class, 'inicio'])->name('inicio'); 
Route::get('/menu', [paginacontroller::class, 'menu'])->name('menu');
Route::get('/contacto', [paginacontroller::class, 'contacto'])->name('contacto');
Route::get('/nosotros', [paginacontroller::class, 'nosotros'])->name('nosotros');
Route::get('/mensajes', [paginacontroller::class, 'mensajes'])->name('mensajes');


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

Route::get('/mensaje', function () {
    return view('mensaje');
})->name('mensaje');

