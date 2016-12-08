<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_producto extends Model
{
    //tipo de productos
    public $timestamps = false;
    protected $table = 'tipoproductos';
    protected $fillable = ['Nombre','precio','foto'];
}
