<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pqrs extends Model
{
    protected $table = 'pqrs';
    protected $fillable = [
        'nombres',
        'apellidos',
        'correos',
        'tipo',
        'mensaje',
        'acepto',
    ];
    //
}
