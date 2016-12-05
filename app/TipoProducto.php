<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    //tipo de productos
    public $timestamps = false;
    protected $fillable = ['Nombre','precio','foto'];
}
