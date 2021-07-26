<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'marca',
        'imagen',
        'precio',
        'stock',
        'estado',
        'oferta',
        'user_id',
        'categoria_id'
    ];
}
