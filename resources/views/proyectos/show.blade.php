@extends('layouts.main')

@section('title', $proyecto->nombre)

@section('content')

  <h2>{{$proyecto->nombre}}</h2>
    <ul>
      <li>
        <strong>Id:</strong>
        <span>{{$proyecto->id}}</span>
      </li>
      <li>
        <strong>Nombre:</strong>
        <span>{{$proyecto->nombre}}</span>
      </li>
      <li>
        <strong>Titulo:</strong>
        <span>{{$proyecto->titulo}}</span>
      </li>
      <li>
        <strong>Fecha Inicio:</strong>
        <span>{{$proyecto->fechainicio}}</span>
      </li>
      <li>
        <strong>Fecha fin:</strong>
        <span>{{$proyecto->fechafin}}</span>
      </li>
      <li>
        <strong>Horas estimadas:</strong>
        <span>{{$proyecto->horasestimadas}}</span>
      </li>
      <li>
        <strong>Empleado encargado:</strong>
        <span><a href="{{route('empleado',['id'=> $proyecto->empleado->id])}}">{{$proyecto->empleado->nombre}}</a></span>
      </li>
      @isset($proyecto->empleados)
        <strong>Colaboradores:</strong>
        <ul style="margin: .5em 0; margin-left: 1.5em">
        @foreach($proyecto->empleados as $empleado)
          <li><a href="{{route('empleado',['id'=>$empleado->id])}}">{{$empleado->nombre}}</a></li>
        @endforeach
        </ul>
      @endisset
    </ul>
@endsection
