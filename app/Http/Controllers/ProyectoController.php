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
        $request->validate([
            'nombre' => 'required',
            'titulo' => 'required',
            'f_inicio' => 'required|date',
            'f_fin' => 'required|date|after:f_inicio',
            'h_estimadas' => 'required',
            'empleado_id' => 'required'
        ]);
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
    function show(Proyecto $proyecto){
    	return view('proyectos.show')->with('proyecto',$proyecto);
    }
    function edit(Proyecto $proyecto){
    	return view('proyectos.create')->with('proyecto',$proyecto)->with('empleados', Empleado::all());
    }
    function update(Proyecto $proyecto, Request $request){
        $request->validate([
            'titulo' => 'required',
            'f_inicio' => 'required|date',
            'f_fin' => 'required|date|after:f_inicio',
            'h_estimadas' => 'required',
            'empleado_id' => 'required'
        ]);
        $proyecto->titulo = $request->titulo;
        $proyecto->fechainicio = $request->f_inicio;
        $proyecto->fechafin = $request->f_fin;
        $proyecto->horasestimadas = $request->h_estimadas;
        $proyecto->empleado_id = $request->empleado_id;
        $proyecto->save();
        return redirect('proyectos');
    }
    function destroy(Proyecto $proyecto){
        $proyecto->delete();
        return redirect('proyectos');
    }
}
