<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tiposervicio;

class TipoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tiposervicio::all();
        $general[] =$tipos;
        return view('gestor.tiposer.list')->with('datos', $general);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('gestor.tiposer.create');
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
            $name = 'tiposer_'. time() . '.' .$file->getClientOriginalExtension();
            $path=public_path() . "/imagen/tiposservicios/";
            $file -> move($path,$name);
        }

        $tipos = new Tiposervicio($request->all());
        $tipos->foto = $name;
        $tipos->save();
        return redirect('admin/tiposer');
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
         $tipos=Tiposervicio::find($id);
      
       return view('gestor.tiposer.edit')->with('tipos',$tipos);
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
        $tipos=Tiposervicio::find($id);
        $name = 'tiposer_'. time() . '.' .$file->getClientOriginalExtension();
        $request-> file ('foto')->move('Imagen',$name);
        $tipos->Nombre=$request->Nombre;
        $tipos->Descripcion=$request->Descripcion;
        $tipos->precio=$request->precio;
        $tipos->save();

        return redirect('admin/tiposer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
       {
              
      $tipos = Tiposervicio::find($id);
      $tipos->delete(); 
      return redirect('admin/tiposer');
    }

    public function vista()
    {
        return view('gestor.tiposer.create');
        
    }
    public function editardatos($id)
    {

        
    }
}
