<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public $timestamps = false;

    protected $fillable = ['RUC', 'Tipoproveedor_id', 'RazonSocial',];

}