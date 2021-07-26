<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $fillable = [
        'venta_id',
        'producto_id',       
        'cantidad',
        'preciotal',
        'estadoVenta',
        'desc'
    ];
    public function venta(){
        return $this->belongsTo(venta::class);
    }
    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
