<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipoDocumento;
use App\Http\Requests;

class tipoDocController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = tipoDocumento::all();
        $general[] =$tipos;
        return view('gestor.tipodoc.lista')->with('datos', $general);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = tipoDocumento::all();
        $general[] = $tipos;
        return view('gestor.tipodoc.create')->with('datos',$general);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $tipos = new Procedencia($request->all());
        $tipos->save();
        return redirect('admin/tipodoc/create');
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
      return redirect('admin/tipodoc');
    }
    
    public function vista()
    {
        return view('gestor.tipodoc.create');
        
    }
    public function editardatos($id)
    {

        
    }
}