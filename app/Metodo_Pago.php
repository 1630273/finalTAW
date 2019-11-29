<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metodo_Pago extends Model
{
    protected $fillable = [
       'id', 'nombre', 'imagen', 'min_cant', 'max_cant', 'cambio',
       'moneda', 'dias_habiles', 'status'
    ];
}
