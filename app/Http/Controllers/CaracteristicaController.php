<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caracteristica;
use App\Http\Requests;

class CaracteristicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        $caracteristica = Caracteristica::all();
         $general[] = $caracteristica;
        return view('gestor.caracteristicas.lista')->with('datos', $general);
    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestor.caracteristicas.create');
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
            $name ='caracteristicas_'. time() . '.' .$file->getClientOriginalExtension();
            $path=public_path() . "/imagen/Caracteristicas/";
            $file -> move($path,$name);
        }

        $caracteristica = new Caracteristica($request->all());
        $caracteristica->foto=$name;
        $caracteristica->save();
        return redirect('admin/caracteristicas');
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
        
        $caracteristica=Caracteristica::find($id);
      
        return view('gestor.caracteristicas.edit')->with('caracteristica',$caracteristica);
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
        
         if($request->file('foto'))
        {
            $file = $request -> file('foto');
            $name ='caracteristicas_'. time() . '.' .$file->getClientOriginalExtension();
            $path=public_path() . "/imagen/Caracteristicas/";
            $file -> move($path,$name);
        }
        $caracteristica =Caracteristica::find($id);
        $caracteristica = $request->all();
        $caracteristica->foto=$name;
        $caracteristica->save();
        return redirect('admin/caracteristicas');

      
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caracteristica = Caracteristica::find($id);
      $caracteristica->delete(); 
      return redirect('admin/caracteristicas');
    }
}
