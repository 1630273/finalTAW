<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud_Retiro extends Model
{
    protected $fillable = [
        'id', 'cantidad', 'fecha', 'status'
     ];
}
