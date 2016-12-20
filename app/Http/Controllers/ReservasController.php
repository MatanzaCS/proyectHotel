<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReservasController extends Controller
{
    public function show(){
        return view('gestor.reservas.ver');
    }
    public function create(){
        return view('gestor.reservas.crear');
    }
}
