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

}
