<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //atributos de reserva
    protected $table="reservas";
    protected $primarykey="id";
    public $timestamps = false;

    protected $fillable =['tipo_reserva','fecha_reserva','fecha_ingresa','fecha_salida','costo_alojamiento','FechaPago','estado','clientes_id'];

}
