<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tipohabitacion;
use App\Habitacion;


class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitaciones = Habitacion::all();
        $tipos = Tipohabitacion::all();
        $general[] = $habitaciones;
        $general[] = $tipos;
        return view('gestor.habitaciones.lista')->with('datos', $general);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tipos = Tipohabitacion::all();
        $general[] = $tipos;
        return view('gestor.habitaciones.create')->with('datos',$general);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $tipos = new Habitacion($request->all());
        $tipos->save();
        return redirect('admin/habitaciones/create');
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

        $habitaciones= Habitacion::find($id);
      
        //return view('gestor.habitaciones.edit',['habitaciones'=>$habitaciones]);
       return view('gestor.habitaciones.edit')->with('habitaciones',$habitaciones);
        
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

        $habitaciones = Habitacion::find($id);
        $data = Input::all();
        $habitaciones->filla($data);
        $habitaciones->save();
        return redirect('admin/habitaciones');

    
 
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
      
      $habitaciones = Habitacion::find($id);
      $habitaciones->delete(); 
      return redirect('admin/habitaciones');
     
    }

}
 