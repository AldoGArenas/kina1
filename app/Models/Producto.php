<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = 'producto';

    public $fillable = [
        'id',
        'nombre',
        'descripcion',
        'precio'
    ];

    public function imagenesProducto(){
        return $this->hasMany('App\Models\ImagenProducto', 'idProducto', 'id');
    }
    
    public function almacen(){
        return $this->hasMany('App\Models\Almacen', 'idProducto', 'id');
    }

}
