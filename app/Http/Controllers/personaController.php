<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\persona;
use App\Http\Requests;

class personaController extends Controller
{
    //persona
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = persona::all();
        $general[] = $personas;
        return view('gestor.personas.lista')->with('datos', $general);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = persona::all();
        $general[] = $tipos;
        return view('gestor.personas.create')->with('datos',$general);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $tipos = new persona($request->all());
        $tipos->save();
        return redirect('admin/personas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $personas= persona::find($id);
      
        //return view('gestor.habitaciones.edit',['habitaciones'=>$habitaciones]);
       return view('gestor.personas.edit')->with('personas',$personas);
        
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

        /*$habitaciones=Habitacion::findorFail($id);
        $habitaciones =update($request->all());
        $habitaciones->update();
         return redirect('admin/habitaciones');*/

        $personas = persona::find($id);
        $personas->fill($request->all());
        $personas->save();
        return redirect('admin/personas');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




       public function vista()
    {

        
    }
    public function destroy($id)
    {
      
      $personas = persona::find($id);
      $personas->delete(); 
      return redirect('admin/personas');
     
    }
}
