<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'rut',
        'foto',
        'direccion',
        'telefono',
        'estado',
        'email',
        'password'
    ];
}
