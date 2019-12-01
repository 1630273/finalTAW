<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    // Indica el nombre de la tabla con la que trabajará este modelo. 
    protected $table='gastos';
  
    // Indica la clave primaria de la tabla previamente definida.
    protected $primaryKey='id';
  
    // Indican las columnas con los que trabajará el modelo para enviarle valores. Se les asignará valores en masa.
    protected $fillable=['id_proyecto', 'id_usuario', 'descripcion', 'fecha', 'monto'];  
}