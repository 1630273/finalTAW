<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioProyecto extends Model
{
    use Notifiable;
     // Indica el nombre de la tabla con la que trabajará este modelo. 
     protected $table='usuarios_proyectos';
  
     // Indica la clave primaria de la tabla previamente definida.
     protected $primaryKey='id';
   
     // Indican las columnas con los que trabajará el modelo para enviarle valores. Se les asignará valores en masa.
     protected $fillable=[ 'id_proyecto', 'id_usuario'];  
}