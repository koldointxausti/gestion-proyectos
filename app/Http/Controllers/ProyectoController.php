<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Empleado;

class ProyectoController extends Controller
{
    function index(){
    	return view('proyectos.index')->with('proyectos',Proyecto::all());
    }
    function create(){
    	return view('proyectos.create')->with('empleados', Empleado::all());
    }
    function store(Request $request){
    	$proyecto = new Proyecto;
    	$proyecto->nombre = $request->nombre;
    	$proyecto->titulo = $request->titulo;
    	$proyecto->fechainicio = $request->f_inicio;
    	$proyecto->fechafin = $request->f_fin;
    	$proyecto->horasestimadas = $request->h_estimadas;
    	$proyecto->empleado_id = $request->empleado_id;
    	$proyecto->save();
    	return redirect('proyectos');
    }
    function show($id){
    	return view('proyectos.show')->with('proyecto',Proyecto::find($id));
    }
    function edit($id){
    	$proyecto = Proyecto::find($id)->first();
    	return view('proyectos.create')->with('proyecto',$proyecto)->with('empleados', Empleado::all());
    }
    function update($id){
        
    }
}
