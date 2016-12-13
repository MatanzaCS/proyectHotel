<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Reportes;

use DB;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$reportes = Reportes::all();
       // return view('gestor.reportes.diario');
    }
    
    public function ReporteMensual()
    {
        return view('gestor.reportes.mensual');
    }
    public function ReporteAnual()
    {
        return view('gestor.reportes.anual');
    }
    public function Menu()
    {
        return view('gestor.reportes.menu');
    }
    public function ReporteHabitacion()
    {
        
        //$tipo_hab=Reportes::Buscar();
        //$habitaciones=DB::table('habitacions')->get();
        //return view('gestor.reportes.habitaciones',compact('tipo_hab'));
        //return view('gestor.reportes.habitaciones')->with("tipo_hab",$tipo_hab);
        /*$resultado =\DB::table('habitacions')
            ->join('tipohabitacions','habitacions.TipoHabitacion_id','=','tipohabitacions.id')
            ->select('habitacions.*','tipohabitacions.nombre')  
            ->get();
        */
        //dd($resultado);
        $resultado=\DB::table('reportes')
            ->select('id','nombre','fecha_reporte','comentario','pdf')
            ->where('nombre','habitaciones')
            ->where('pdf','<>','')
            ->get();
        return view('gestor.reportes.habitaciones')->with("resultado",$resultado);
    }
    public function ReporteServicios()
    {
        $servicios=DB::table('servicios')->get();
        return view('gestor.reportes.servicios',compact('servicios'));
        //return view('gestor.reportes.servicios');
    }
    public function ReporteUsuarios()
    {
        $users=DB::table('users')->get();
        return view('gestor.reportes.usuarios',compact('users'));
        //return view('gestor.reportes.usuarios');
    }
    public function ReporteReservas()
    {
        $reservas=DB::table('reservas')->get();
        return view('gestor.reportes.reservas',compact('reservas'));
        //return view('gestor.reportes.reservas');
    }
    public function ReporteHabAnual()
    {
        return view('gestor.reportes.anual');
    }
    public function ReporteHabMensual()
    {
        return view('gestor.reportes.mensual');
    }
    public function buscar_tipoHab($id)
    {
        $tipo_hab=DB::table('tipohabitacions')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('gestor.reportes.diario');
        //return "sadadsdad"; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
