<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioProyecto extends Model
{
    protected $fillable = [
        'id', 'id_proyecto', 'id_creador', 'colaborador'
    ];

    public $timestamps = false;
    
    public function proyecto(){
        return $this->belongsTo('App\Proyecto');
    }
 
    public function usuario(){
        return $this->belongsTo('App\Persona');
    }
}
