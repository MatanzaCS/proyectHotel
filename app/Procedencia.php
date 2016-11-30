<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedencia extends Model
{
    //
    public $timestamps = false;
  
    protected $fillable = ['Pais','departamento','region','Ciudad'];
}
