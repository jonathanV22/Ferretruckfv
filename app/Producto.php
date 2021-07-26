<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
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
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    
    public function user(){
        return $this->belongsTo(Usuario::class);
    }

   
}
