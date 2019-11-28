<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'id_usuario', 'correo', 'contrasena', 'condicion',
        'id_rol', 'id_persona', 'condicion'
    ];
}
