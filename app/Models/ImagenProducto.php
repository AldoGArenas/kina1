<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagenProducto extends Model
{
    public $table = 'imagen_producto';
    
    public $fillable = [
        'id',
        'idProducto',
        'imagen',
    ];
    
    public function producto(){
        return $this->belongsTo('App\Models\Producto', 'idProducto', 'id');
    }
}
