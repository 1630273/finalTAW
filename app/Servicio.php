<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'id', 'titulo' , 'monto', 'descripcion', 'fecha_disp', 'status'
    ];
}
