<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Procedencia;
use App\persona;
use App\Http\Requests;

class ClienteController extends Controller
{
    //controlador de cliente
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        $Procedencias= Procedencia::all();
        $personas = persona::all();
        
       

        return view('gestor.cliente.lista')->with('clientes', $clientes)
        ->with('Procedencias', $Procedencias)
        ->with('personas', $personas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Procedencias= Procedencia::all();
        $personas = persona::all();
        $tipos = Cliente::all();
        $general[] = $Procedencias;
        $general[] = $personas;
        $general[] = $tipos;
        //dd($general);
        return view('gestor.cliente.create')->with('datos',$general);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $tipos = new Cliente ($request->all());

        $tipos->save();
        return redirect('admin/cliente');
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
        return view('gestor.cliente.create');
        
    }
    public function editardatos($id)
    {

        
    }
}
