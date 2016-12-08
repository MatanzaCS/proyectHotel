<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    //
    public $timestamps= false;
    protected $fillable = ['nombre','foto'];
}
