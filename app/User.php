<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

        public function roles(){
            return $this ->belongsToMany('App\Role');
        }

        public function isAdmin(){
            return $this ->roles()->where('name', 'admin')->first();
            //cette ligne revoyera vrai sino faut si la persone n'est pas admin
        }

        public function hasAnyRole(array $roles) {
            return $this->roles()->whereIn('name',$roles)->first(); // l'eloquent whereIn veut dire qu'on ne veut pas prendre un a un mais en forme de table , 
            //tant qon a le noms de role comme admin ou auteur ca passera 
            
        }
        public function cahiers(){
            return $this ->belongsToMany('App\Cahier');
        }
        public function events(){
            return $this ->belongsTo('App\Event');
        }

   }


