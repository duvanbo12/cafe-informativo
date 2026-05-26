<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['nombre_cliente', 'productos', 'total'];

    protected $casts = [
        'productos' => 'array',   // convierte el JSON automáticamente
    ];
}