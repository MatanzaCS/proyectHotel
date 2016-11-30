<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    //tipo documento nuevo
        public $timestamps = false;
    
    protected $fillable = ['Nombre'];
}
