<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadoController extends Controller
{
    function index(){
    	return view('empleados.index')->with('empleados',Empleado::all());
    }
    function show($id){
    	return view('empleados.show')->with('empleado',Empleado::find($id));
    }
}
