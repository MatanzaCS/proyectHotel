<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consumo;
use App\Cliente;
use App\producto;
use App\Http\Requests;

class consumoController extends Controller
{
//controlador de cliente
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumos = consumo::all();
        $general[] =$consumos; 
        return view('gestor.consumos.lista')->with('datos', $general);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consumos= consumo::all();
        $productos = producto::all();
        $tipos = Cliente::all();
        $general[] = $consumos;
        $general[] = $productos;
        $general[] = $tipos;
        //dd($general);
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
         
        $consumos = new consumo ($request->all());

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
             
      /*$tipos = Tipohabitacion::find($id);
      $tipos->delete(); 
      return redirect('admin/tipohab');*/
    }
    
    public function vista()
    {
        return view('gestor.productos.create');
        
    }
    public function editardatos($id)
    {

        
    }
}
