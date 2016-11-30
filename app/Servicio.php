<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    //atributos de servicio
    public $timestamps = false;

    protected $fillable =['nomservicio','fecha','TipoServicio_id','reserva_id'];

}
