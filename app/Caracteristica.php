<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    //
    public $timestamps= false;

    public function tipohabitacions() {
            return $this->belongsToMany('Tipohabitacion');
    }



    protected $fillable = ['nombre','foto'];

}
