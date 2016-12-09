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
    public function scopeBuscar($id)
    {
        
    }
}