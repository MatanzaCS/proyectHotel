<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
    //
    public $timestamps = false;
    protected $table = 'categoriaproductos';
    protected $fillable =['Nombre','foto'];
}
