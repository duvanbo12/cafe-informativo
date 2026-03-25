<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginacontroller;
use App\Http\Controllers\pqrscontroller;

Route::get('/', [paginaController::class, 'inicio'])->name('inicio'); 
Route::get('/menu', [paginaController::class, 'menu'])->name('menu');
Route::get('/contacto', [paginaController::class, 'contacto'])->name('contacto');
Route::get('/nosotros', [paginaController::class, 'nosotros'])->name('nosotros');
Route::get('/mensaje', [paginaController::class, 'mensaje'])->name('mensaje');

Route::post('/pqrs', [PqrsController::class, 'store'])->name('pqrs.store');


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

