<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportes extends Model
{
    protected $table='reservas';
    
    protected $primaryKey='id';

    public $timestamps='false';

    protected $fillable=[
        'fecha_reserva',
        'fecha_ingresa',
        'fecha_salida',
        'estado'
    ];
    /*
    public function scopeBuscar($query)
    {
        //"select habitacions.numero,tipohabitacions.Nombre from habitacions,tipohabitacions where habitacions.TipoHabitacion_id=tipohabitacions.id"
        $resultado=$query->where('id',1);
        //$resultado=$query->where('TipoHabitacion_id','=','1');
        //return $resultado;
        return $resultado;
    }
    */
}