<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioProyecto extends Model
{
    protected $fillable = [
        'id', 'id_proyecto', 'id_usuario'
    ];
}
