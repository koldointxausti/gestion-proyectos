<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

class ProyectoController extends Controller
{
    function index(){
    	return view('proyectos.index')->with('proyectos',Proyecto::all());
    }
    function show($id){
    	return view('proyectos.show')->with('proyecto',Proyecto::find($id));
    }
}
