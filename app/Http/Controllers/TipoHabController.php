<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipohabitacion;
use App\Http\Requests;

class TipoHabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipohabitacion::all();
        $general[] =$tipos;
        return view('gestor.tipohab.lista')->with('datos', $general);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('gestor.tipohab.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if($request->file('foto'))
        {
            $file = $request -> file('foto');
            $name = 'tipohabitacion_'. time() . '.' .$file->getClientOriginalExtension();
            $path=public_path() . "/imagen/tiposHabitaciones/";
            $file -> move($path,$name);
        }

        $tipos = new Tipohabitacion($request->all());
        $tipos->foto = $name;
        $tipos->save();
        return redirect('admin/tipohab/create');
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
             
      $tipos = Tipohabitacion::find($id);
      $tipos->delete(); 
      return redirect('admin/tipohab');
    }
    
    public function vista()
    {
        return view('gestor.tipohab.create');
        
    }
    public function editardatos($id)
    {

        
    }
}
