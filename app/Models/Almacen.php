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

}
