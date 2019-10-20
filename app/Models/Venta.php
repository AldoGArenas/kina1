<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public $table = 'venta';
    
    public $fillable = [
        'id',
        'idUser',
        'idDescuento',
        'comprador',
        'descripcion',
        'total',
    ];

    public function usuario(){
        return $this->belongsTo('App\User', 'idUser', 'id');
    }

    public function descuento(){
        return $this->belongsTo('App\Models\descuento', 'idDescuento', 'id');
    }

    public function almacenVenta(){
        return $this->belongsToMany('App\Models\Venta','almacen_venta', 'idAlmacen', 'idVenta');
    }   

}
