<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipohabitacion extends Model
{
    public $timestamps = false;
    /*
    public function caracteristicas() {
            return $this->belongsToMany('Caracteristica');
    }   
*/
    protected $fillable = ['Nombre', 'Descripcion', 'precio_habitacion','foto',];



}