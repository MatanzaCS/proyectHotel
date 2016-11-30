<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoDocumento extends Model
{
    //
  public $timestamps = false;
    
    protected $fillable = ['Nombre'];
}
