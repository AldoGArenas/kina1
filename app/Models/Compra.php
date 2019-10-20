<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public $table = 'compra';
    
    public $fillable = [
        'id',
        'idUser',
        'descripcion',
        'total',
        'proveedor',
    ];

    public function usuario(){
        return $this->belongsTo('App\User', 'idUser', 'id');
    }
    public function almacenCompra(){
        return $this->belongsToMany('App\Models\Almacen','almacen_compra', 'idAlmacen', 'idCompra');
    }   
}
