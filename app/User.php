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
        'id_rol','id_persona','email','password','condicion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     
  *  protected $hidden = [
   * 'password', 'remember_token',
   * ];
*/
    
    public function roles() {
        return $this->belongTo('App\Roles');
    }

    public function persona() {
        return $this->hasOne('App\Personas','id','id');
    }

}
