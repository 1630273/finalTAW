<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{

      // Indica el nombre de la tabla con la que trabajará este modelo. 
      protected $table='personas';
  
      // Indica la clave primaria de la tabla previamente definida.
      protected $primaryKey='id';
    
      // Indican las columnas con los que trabajará el modelo para enviarle valores. Se les asignará valores en masa.
      protected $fillable=['nombre','apellido_p','apellido_m','telefono','ciudad','pais'];  //añadirle condicion para que se desactive.

      public function user(){
            return $this->hasOne('App\User');//personas tiene un usuario
      }

}