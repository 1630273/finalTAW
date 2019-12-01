<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    // Indica el nombre de la tabla con la que trabajará este modelo. 
    protected $table='tareas';
  
    // Indica la clave primaria de la tabla previamente definida.
    protected $primaryKey='id';
  
    // Indican las columnas con los que trabajará el modelo para enviarle valores. Se les asignará valores en masa.
    protected $fillable=['id_actividad', 'descripcion', 'f_inicio', 'f_final', 'tipo_factura', 
    'precio', 'status', 'condicion'];  

}
