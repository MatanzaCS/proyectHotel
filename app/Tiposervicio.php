<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiposervicio extends Model
{
    public $timestamps = false;

    public $table ="Tipohabitacions"
    
    protected $fillable = ['Nombre', 'Descripcion', 'precio','foto'];
}


