<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaProducto;
use App\Http\Requests;

class CategoriaController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = CategoriaProducto::all();
        $general[] =$tipos;
        return view('gestor.catpro.lista')->with('datos', $general);
    }
    public function principal()
    {
        $tipos = CategoriaProducto::all();
        $general[] =$tipos;
        return view('index.productos')->with('datos', $general);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('gestor.catpro.create');
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
            $name = 'cateproducto_'. time() . '.' .$file->getClientOriginalExtension();
            $path=public_path() . "/imagen/cateproducto/";
            $file -> move($path,$name);
        }

        $tipos = new CategoriaProducto($request->all());
        $tipos->foto = $name;
        $tipos->save();
        return redirect('admin/catpro');
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
        
        $tipos=CategoriaProducto::find($id);
      
        //return view('gestor.habitaciones.edit',['habitaciones'=>$habitaciones]);
       return view('gestor.catpro.edit')->with('tipos',$tipos);
        
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
            $file = $request -> get('foto');
            $name = 'tipohabitacion_'. time() . '.' .$file->getClientOriginalExtension();
            $path=public_path() . "/imagen/tiposHabitaciones/";
            $file -> move($path,$name);
        }
        
        $tipos=CategoriaProducto::find($id);
     //   $tipos->foto = $name;
        $tipos->Nombre=$request->Nombre;
        $tipos->Descripcion=$request->Descripcion;
        $tipos->precio_habitacion=$request->precio_habitacion;
        $tipos->save();

        return redirect('admin/catpro');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             
      $tipos = CategoriaProducto::find($id);
      $tipos->delete(); 
      return redirect('admin/catpro');
    }

    public function vista()
    {
        return view('gestor.catpro.create');
        
    }
    public function editardatos($id)
    {

        
    }
}
