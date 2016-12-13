<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consumo extends Model
{
    //
    public $timestamps = false;
    protected $table = 'consumos';    
    protected $fillable = ['cantidad','estado','fecha','producto_id','total','clientes_id'];

}
