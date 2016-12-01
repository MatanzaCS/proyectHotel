<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class DateController extends Controller
{
    function showDate(Request $request)
    {
 
       dd($request->date);
    }
}