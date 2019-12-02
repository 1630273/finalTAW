<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
        'id', 'id_creador', 'titulo', 'cliente',
        'presupuesto', 'progreso', 'descripcion', 'condicion', 'f_inicio', 'f_final' 
    ];
    
}
