<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PqrsController;

Route::get('/',         [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/menu',     [PaginaController::class, 'menu'])->name('menu');
Route::get('/nosotros', [PaginaController::class, 'nosotros'])->name('nosotros');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');

Route::post('/pqrs', [PqrsController::class, 'store'])->name('pqrs.store');
Route::get('/mensaje', [PqrsController::class, 'index'])->name('mensaje');

Route::get('/mensaje/{id}/editar',  [PqrsController::class, 'edit'])->name('mensajes.edit');
Route::put('/mensaje/{id}',         [PqrsController::class, 'update'])->name('mensajes.update');
Route::delete('/mensaje/{id}',      [PqrsController::class, 'destroy'])->name('mensajes.destroy');