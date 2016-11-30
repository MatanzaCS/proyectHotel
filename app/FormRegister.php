<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormRegister extends Model
{
    protected $table='users';
    
    protected $primaryKey='id';

    public $timestamps='false';

    protected $fillable=[
        'username',
        'password'
    ];
}
