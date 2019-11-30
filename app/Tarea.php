<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = [
        'id', 'id_actividad', 'descripcion', 'f_inicio', 'f_final', 'tipo_factura', 
        'precio', 'status', 'condicion'
    ];
}
