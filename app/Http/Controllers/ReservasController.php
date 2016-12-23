<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Illuminate\Support\Facades\Redirect;

use App\Reserva;

class ReservasController extends Controller
{
    public function index()
    {
        $resultado=DB::table('reservas')
            ->join('clientes','reservas.clientes_id','=','clientes.id')
            ->join('personas','clientes.persona_id','=','personas.id')
            ->select('reservas.*','personas.nombre')
            ->get();
        $general[] = $resultado;
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
        $resultado=DB::table('personas')
            ->select('id','nombre','apellidos')
            ->get();
        return view('gestor.reservas.crear')->with('resultado',$resultado);
    }

    public function store(Request $request)
    {
         $reserva=new Reserva;
         $reserva->tipo_reserva=$request->get('tipo_reserva');
         $reserva->fecha_ingresa=$request->get('fecha_ingresa');
         $reserva->fecha_salida=$request->get('fecha_salida');
         $reserva->costo_alojamiento=$request->get('costo_alojamiento');
         $reserva->estado=$request->get('estado');
         if ($request->get('estado')!='Pagado'){
            $reserva->FechaPago='0000-00-00 00:00:00';
         }
         $reserva->clientes_id=$request->get('clientes_id');
         $reserva->save();
         return Redirect::to('admin/reservas');
    }
}
