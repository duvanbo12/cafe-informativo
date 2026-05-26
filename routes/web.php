<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PqrsController;
use App\Http\Controllers\ProfileController;

// Rutas públicas
Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/menu', [PaginaController::class, 'menu'])->name('menu');
Route::get('/nosotros', [PaginaController::class, 'nosotros'])->name('nosotros');
Route::get('/contacto', [PaginaController::class, 'contacto'])->name('contacto');
Route::post('/pqrs', [PqrsController::class, 'store'])->name('pqrs.store');

// Rutas del Pedido (Sin JavaScript)
Route::post('/pedido/agregar/{id}', [PaginaController::class, 'agregarPedido'])->name('pedido.agregar');
Route::post('/pedido/limpiar', [PaginaController::class, 'limpiarPedido'])->name('pedido.limpiar');
Route::get('/pedido/confirmar', [PaginaController::class, 'confirmarPedido'])->name('pedido.confirmar');
Route::post('/pedido/guardar', [PaginaController::class, 'guardarPedido'])->name('pedido.guardar');

// Dashboard conectado al controlador existente
Route::get('/dashboard', [PaginaController::class, 'inicioDashboard'])->middleware('auth')->name('dashboard');

// Rutas privadas
Route::middleware('auth')->group(function () {
    Route::get('/mensajes', [PqrsController::class, 'index'])->name('mensajes');
    Route::get('/mensajes/{id}/editar', [PqrsController::class, 'edit'])->name('mensajes.edit');
    Route::put('/mensajes/{id}', [PqrsController::class, 'update'])->name('mensajes.update');
    Route::delete('/mensajes/{id}', [PqrsController::class, 'destroy'])->name('mensajes.destroy');

    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// RUTA DE MANTENIMIENTO
Route::get('/limpiar-y-cargar', function() {
    \App\Models\producto::truncate();
    \App\Models\producto::insert([
        ['nombre' => 'Tinto Nariñense', 'descripcion' => 'Café negro tradicional, cultivado en las montañas de Nariño.', 'precio' => 2000, 'imagen' => 'https://www.esariri.com/wp-content/uploads/2022/11/Diseno-sin-titulo-20.jpg', 'created_at' => now(), 'updated_at' => now()],
        ['nombre' => 'Capuchino', 'descripcion' => 'Espresso con leche vaporizada y espuma cremosa.', 'precio' => 5000, 'imagen' => 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=400&q=80', 'created_at' => now(), 'updated_at' => now()],
        ['nombre' => 'Café Latte', 'descripcion' => 'Espresso suave con leche caliente y toque de vainilla.', 'precio' => 5500, 'imagen' => 'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=400&q=80', 'created_at' => now(), 'updated_at' => now()],
        ['nombre' => 'Mocaccino', 'descripcion' => 'Combinación de espresso, chocolate y leche cremosa.', 'precio' => 6000, 'imagen' => 'https://kava1.lt/wp-content/uploads/2022/12/preparare-mocaccino-a-casa.jpg', 'created_at' => now(), 'updated_at' => now()],
        ['nombre' => 'Café Frío', 'descripcion' => 'Cold brew preparado en frío durante 12 horas.', 'precio' => 6500, 'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfLoMwxpcEEstK3T79s66qxszFmljQV2NNXQ&s', 'created_at' => now(), 'updated_at' => now()],
        ['nombre' => 'Chocolate Caliente', 'descripcion' => 'Chocolate artesanal con leche entera y canela.', 'precio' => 4500, 'imagen' => 'https://elrinconcolombiano.com/wp-content/uploads/2024/05/Chocolate-Caliente-receta-colombiana.jpg', 'created_at' => now(), 'updated_at' => now()],
        ['nombre' => 'Croissant de Mantequilla', 'descripcion' => 'Hofaldre artesanal horneado cada mañana.', 'precio' => 4000, 'imagen' => 'https://static.vecteezy.com/system/resources/thumbnails/056/932/616/small/a-close-up-of-freshly-baked-croissants-dusted-with-flour-emitting-steam-in-a-warm-setting-photo.jpg', 'created_at' => now(), 'updated_at' => now()],
        ['nombre' => 'Pastel de Chocolate', 'descripcion' => 'Bizcocho húmedo con cobertura de ganache oscuro.', 'precio' => 6000, 'imagen' => 'https://lasoleta.com/wp-content/uploads/2020/06/IMG_3916.jpg', 'created_at' => now(), 'updated_at' => now()],
        ['nombre' => 'Galletas de Avena', 'descripcion' => 'Snack saludable con avena, miel y chips de chocolate.', 'precio' => 2500, 'imagen' => 'https://images.unsplash.com/photo-1558961363-fa8fdf82db35?w=400&q=80', 'created_at' => now(), 'updated_at' => now()],
        ['nombre' => 'Tostada con Mermelada', 'descripcion' => 'Pan artesanal tostado con mermelada de mora nariñense.', 'precio' => 3500, 'imagen' => 'https://img.freepik.com/foto-gratis/vista-superior-tostadas-mermelada-rosa_23-2148381099.jpg', 'created_at' => now(), 'updated_at' => now()],
        ['nombre' => 'Pan de Maíz', 'descripcion' => 'Pan de maíz nariñense, suave y con sabor casero.', 'precio' => 4500, 'imagen' => 'https://radionacional-v3.s3.amazonaws.com/s3fs-public/node/article/field_image/PAN%20DE%20MAIZ%20DE%20LA%20MART%C3%8DNEZ.jpg', 'created_at' => now(), 'updated_at' => now()],
        ['nombre' => 'Empanada de Pipián', 'descripcion' => 'Empanada nariñense tradicional, frita y crujiente.', 'precio' => 2000, 'imagen' => 'https://images.rappi.com/restaurants_background/empanaditasdepipian-1661364004384.jpg', 'created_at' => now(), 'updated_at' => now()]
    ]);

    return "¡Base de datos cargada correctamente!";
});