<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
        'id', 'id_usuario', 'titulo', 'cliente','presupuesto',
        'f_inicio', 'f_final', 'condicion'
    ];
}
