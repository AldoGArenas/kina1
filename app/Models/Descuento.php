<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    public $table = 'descuento';
    
    public $fillable = [
        'id',
        'descuento',
        'nombre',
    ];

}
