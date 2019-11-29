<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
        'id_proyecto', 'id_usuario', 'titulo', 'cliente',
        'f_inicio', 'f_final', 'condicion'
    ];
}
