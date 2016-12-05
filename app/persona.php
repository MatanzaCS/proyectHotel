<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    //personas
    public $timestamps = false;


    
    protected $fillable = ['nombre','apellidos','edad','sexo','telefono','email','TipoDocumento','numdocumento'];
}
