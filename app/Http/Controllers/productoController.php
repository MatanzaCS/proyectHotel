<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\CategoriaProducto;
use App\Http\Requests;

class productoController extends Controller
{
    //
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = producto::all();
        $tipos = categoriaProducto::all();
        $general[] = $productos;
        $general[] = $tipos;
        return view('gestor.productos.lista')->with('datos', $general);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tipos = categoriaProducto::all();
        $general[] = $tipos;
        return view('gestor.productos.create')->with('datos',$general);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $tipos = new producto($request->all());
        $tipos->save();
        return redirect('admin/productos');
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

       //
        $productos= producto::find($id);
        $tipos= categoriaProducto::all();
         
      return view('gestor.productos.edit')
      ->with('productos',$productos)  
      ->with('tipos',$tipos);

        
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

         $productos = producto::find($id);
        
        $productos->numero=$request->numero;
        $productos->piso=$request->piso;
        $productos->estado=$request->estado;
      $productos->TipoHabitacion_id=$request->TipoHabitacion_id;
        $productos->save();
        return redirect('admin/productos');

    
 
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
      
      $productos = producto::find($id);
      $productos->delete(); 
      return redirect('admin/productos');
     
    }
}
