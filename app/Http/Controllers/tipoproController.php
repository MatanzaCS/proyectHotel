<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProducto;
use App\Http\Requests;

class tipoproController extends Controller
{
    //productos
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = TipoProducto::all();
        $general[] =$tipos;
        return view('gestor.tipopro.lista')->with('datos', $general);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('gestor.tipopro.create');
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
            $name = 'tipoprodu_'. time() . '.' .$file->getClientOriginalExtension();
            $path=public_path() . "/imagen/tipoproducto/";
            $file -> move($path,$name);
        }

        $tipos = new TipoProducto($request->all());
        $tipos->foto = $name;
        $tipos->save();
        return redirect('admin/tipopro/create');
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
        
        $tipos=TipoProducto::find($id);
      
        
       return view('gestor.tipopro.edit')->with('tipos',$tipos);
        
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
                  
           $tipos=TipoProducto::find($id);
            $tipos =fill($request->all());
            $tipos->save();
         return redirect('admin/tipopro');
      



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             
      $tipos = TipoProducto::find($id);
      $tipos->delete(); 
      return redirect('admin/tipopro');
    }

    public function vista()
    {
        return view('gestor.tipopro.create');
        
    }
    public function editardatos($id)
    {

        
    }
}
