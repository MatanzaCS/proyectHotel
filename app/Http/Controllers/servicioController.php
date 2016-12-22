<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tiposervicio;
use App\Servicio;


class servicioController extends Controller
{

    //controlador de servicio
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Servicios = Servicio::all();
        $tipos = Tiposervicio::all();
        $general[] = $Servicios;
        $general[] = $tipos;
        return view('gestor.Servicios.lista')->with('datos', $general);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tipos = Servicio::all();
        $tipos = Tiposervicio::all();
        $general[] = $tipos;
        return view('gestor.Servicios.create')->with('datos',$general);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
       
         $tipos = new Servicio($request->all());
         $tipos->save();
         return redirect('admin/Servicios');
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
        // editar servicios

        $Servicios= Servicio::find($id);
      
        //return view('gestor.habitaciones.edit',['habitaciones'=>$habitaciones]);
       return view('gestor.Servicios.edit')->with('Servicios',$Servicios);
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
        //modificar datos
        $Servicios=Servicios::findorFail($id);
        $Servicios =update($request->all());
        $Servicios->update();
         return redirect('admin/Servicios');
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
