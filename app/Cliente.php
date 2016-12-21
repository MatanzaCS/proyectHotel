<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    public $timestamps= false;
    protected $fillable = ['fechain','fechaout','persona_id','Procedencia_id','nomcompleto'];
}
