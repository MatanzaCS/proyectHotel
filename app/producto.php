<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    //
  public $timestamps = false;


    protected $table = 'productos';
    protected $fillable = ['nombre', 'precio', 'cantidad','CategoriaProducto_id',];

}
