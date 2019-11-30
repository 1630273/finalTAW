<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problema extends Model
{
    protected $fillable = [
        'id', 'descripcion',  'status', 'fecha'
    ];
}
