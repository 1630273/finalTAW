<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retiro extends Model
{
    // Indica el nombre de la tabla con la que trabajará este modelo. 
    protected $table='retiros';
  
    // Indica la clave primaria de la tabla previamente definida.
    protected $primaryKey='id';
  
    // Indican las columnas con los que trabajará el modelo para enviarle valores. Se les asignará valores en masa.
    protected $fillable=[ 'id_usuario', 'id_metodoPago', 'id_proyecto', 'monto', 'condicion'];
}
