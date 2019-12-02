<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['nombre','apellido_p','apellido_m','telefono','ciudad','pais'];

    public function user(){
        return hasOne(App\User);
    }
}
