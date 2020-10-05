<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = [
        'nom',
    ];
    public function departements(){
        return $this ->hasMany('App\Poste');
    }
}
