<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use PDF;

class PDFController extends Controller
{
    public function index(){
        /*
        Route::get('pdf', function () {
                $pdf =PDF::loadview('vistapdf');
                return $pdf->download('REPORTES.pdf');
        });
        */
        $resultado=DB::table('habitacions')
            ->join('tipohabitacions','habitacions.TipoHabitacion_id','=','tipohabitacions.id')
            ->select('habitacions.*','tipohabitacions.nombre')
            ->get();
        $pdf = PDF::loadview('vistapdf');
        return $pdf->download('REPORTES.pdf');
        //return view('vistapdf');
    }
    
}
