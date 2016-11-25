<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipohabitacion extends Model
{
    public $timestamps = false;

    //public $table ="Tipohabitacions";
    
    protected $fillable = ['Nombre', 'Descripcion', 'precio_habitacion','caracteristicas_id','foto',];

}