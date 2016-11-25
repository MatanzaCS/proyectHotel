<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipousuario extends Model
{
    public $timestamps = false;

     protected $fillable = [
        'nombre' ];

    public function usuarios()
    {
    	return $this->hasMany('App\User');
    }
}
