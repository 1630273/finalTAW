<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable = [
        'id', 'asunto', 'fecha', 'monto', 'descuento'
    ];
}
