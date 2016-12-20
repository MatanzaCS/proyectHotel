<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
class ReservasController extends Controller
{
    public function show(){
        $resultado=DB::table('reservas')
          ->join('habitacions','reservas.habitacion_id','=','habitacions.id')
          ->join('clientes','reservas.clientes_id','=','clientes.id')
          ->join('personas','clientes.persona_id','=','personas.id')
          ->select('reservas.id','personas.nombre','habitacions.numero','reservas.fecha_reserva','reservas.fecha_ingresa','reservas.fecha_salida','reservas.estado')
          ->get();
        return view('gestor.reservas.ver')->with('resultado',$resultado);
    }
    public function create(){
        return view('gestor.reservas.crear');
    }
}
