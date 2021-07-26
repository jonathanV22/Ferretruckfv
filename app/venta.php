<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $fillable = [
        'user_id',
        'u_venta_id',
        'precioFinal',
        'iva',
        'fecha',
    ];
    public function detalleVenta(){
        return $this->hasMany(DetalleVenta::class);
    }
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

}
