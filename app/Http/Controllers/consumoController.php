<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consumo;
use App\Cliente;
use App\producto;
use App\Http\Requests;

class consumoController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumos = consumo::all();
        $clientes = Cliente::all();
        $productos = producto::all();
        $general[] = $consumos;
        $general[] = $clientes;
        $general[] = $productos;
        return view('gestor.consumos.lista')->with('datos', $general);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $clientes = Cliente::all();
        $general[] = $clientes;
        $productos = producto::all();
        $general[] = $productos;
        return view('gestor.consumos.create')->with('datos',$general);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $consumos = new consumo($request->all());
        $consumos->save();
        return redirect('admin/consumos');
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

         $consumos = consumo::find($id);
        
        $consumos->numero=$request->numero;
        $consumos->piso=$request->piso;
        $consumos->estado=$request->estado;
      $consumos->TipoHabitacion_id=$request->TipoHabitacion_id;
        $consumos->save();
        return redirect('admin/consumos');

    
 
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
      
      $consumos = consumo::find($id);
      $consumos->delete(); 
      return redirect('admin/consumos');
     
    }
}
