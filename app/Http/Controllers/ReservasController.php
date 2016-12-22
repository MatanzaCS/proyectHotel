<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Reserva;

class ReservasController extends Controller
{
    public function index()
    {
        $reservas = Reserva::all();
        $general[] = $reservas;
        return view('gestor.reservas.ver')->with('resultado', $general);
    }
    public function show()
    {
        /*
        $resultado=DB::table('reservas')
          ->join('clientes','reservas.clientes_id','=','clientes.id')
          ->join('personas','clientes.persona_id','=','personas.id')
          ->select('reservas.id','personas.nombre','reservas.fecha_reserva','reservas.fecha_ingresa','reservas.fecha_salida','reservas.estado')
          ->get();
        return view('gestor.reservas.ver')->with('resultado',$resultado);
        */
    }
    public function create()
    {
        return view('gestor.reservas.crear');
    }

    public function store(Request $request)
    {
         $reserva=new Reserva;
         $reserva->tipo_reserva=$request->get('tipo_reserva');
         $reserva->fecha_reserva='22/12/2016';
         $reserva->fecha_ingresa=$request->get('fecha_ingresa');
         $reserva->fecha_salida=$request->get('fecha_salida');
         $reserva->costo_alojamiento=$request->get('costo_alojamiento');
         $reserva->FechaPago="23/12/2016";
         $reserva->estado=$request->get('estado');
         $reserva->clientes_id=$request->get('clientes_id');
         $reserva->save();
         return Redirect::to('reservas/crear');
    }
}
