<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class DepartamentoController extends Controller
{
    function index(){
    	return view('departamentos.index')->with('departamentos',Departamento::all());
    }
    function show($id){
    	return view('departamentos.show')->with('departamento',Departamento::find($id));
    }
}
