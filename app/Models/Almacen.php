<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    public $table = 'almacen';
    
    public $fillable = [
        'id',
        'idProducto',
        'fechaCompra',
    ];

    public function producto(){
        return $this->belongsTo('App\Models\Producto', 'idProducto', 'id');
    }
    public function almacenCompra(){
        return $this->belongsToMany('App\Models\Compra','almacen_compra', 'idAlmacen', 'idCompra');
    }   
    public function almacenVenta(){
        return $this->belongsToMany('App\Models\Venta','almacen_venta', 'idAlmacen', 'idVenta');
    }   
}
