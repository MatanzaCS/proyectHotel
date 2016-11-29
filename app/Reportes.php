<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportes extends Model
{
    public $timestamps = false;


    
    protected $fillable = ['numero', 'piso', 'estado','TipoHabitacion_id',];

}