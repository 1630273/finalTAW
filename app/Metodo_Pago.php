<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metodo_Pago extends Model
{

    // Indica el nombre de la tabla con la que trabajará este modelo. 
    protected $table='metodos_pago';
  
    // Indica la clave primaria de la tabla previamente definida.
    protected $primaryKey='id';
  
    // Indican las columnas con los que trabajará el modelo para enviarle valores. Se les asignará valores en masa.
    protected $fillable=[ 'id', 'nombre', 'min_cant', 'max_cant', 'cambio',
                          'moneda', 'dias_habiles', 'status']; 
}
