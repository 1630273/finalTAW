<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $fillable = [
        'id', 'id_proyecto', 'titulo', 'descripcion', 
        'f_inicio', 'f_final', 'status'
    ];
}
