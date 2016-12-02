<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipocuenta extends Model
{
	public $timestamps = false;
	protected $fillable = ['nombre',];
	 
     public function cuentas()
    {
        return $this->hasMany('App\Cuenta');
    }
}
