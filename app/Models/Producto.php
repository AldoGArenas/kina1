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

    public function imagenesDescuento(){
        return $this->hasMany('App\Models\ImagenDescuento', 'idProducto', 'id');
    }
    
    public function almacen(){
        return $this->hasMany('App\Models\Almacen', 'idProducto', 'id');
    }

}
