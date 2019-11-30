<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $fillable = [
        'id', 'tipo_gasto', 'fecha', 'f_final'
    ];
}