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

}
