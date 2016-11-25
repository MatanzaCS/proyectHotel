<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    public $timestamps = false;

    protected $fillable = ['Codigo', 'Nombre', 'Saldo','Tipo','Secuencia','tipoCuenta_id'];

    public function cuentatipo()
    {
        return $this->belongsTo('App\Tipocuenta');
    }
}