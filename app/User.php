<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','id_persona','email','password','condicion'
    ];


   protected $hidden = [
   'password', 'remember_token',
    ];


    public function rol() {
        return $this->belongTo('App\Rol');
    }

    public function persona() {
        return $this->belongsTo('App\Persona');
    }

}
