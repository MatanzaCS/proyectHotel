<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoproveedor extends Model
{
	public $timestamps = false;
	protected $fillable = ['nombre',];
	 
     public function proveedores()
    {
        return $this->hasMany('App\Proveedor');
    }
}