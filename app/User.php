<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
     // Indica el nombre de la tabla con la que trabajará este modelo. 
     protected $table='users';
  
     // Indica la clave primaria de la tabla previamente definida.
     protected $primaryKey='id';
   
     // Indican las columnas con los que trabajará el modelo para enviarle valores. Se les asignará valores en masa.
     protected $fillable=['id_rol','id_persona','email','password','condicion'];  

    
    public function roles() {
        return $this->belongTo('App\Roles');
    }

    public function persona() {
        return $this->hasOne('App\Personas','id','id');
    }

}
