@extends('layouts.main')

@section('title', $departamento->nombre)

@section('content')

  <h2>{{$departamento->nombre}}</h2>

    <ul>
      <li>
        <strong>Id:</strong>
        <span>{{$departamento->id}}</span>
      </li>
      <li>
        <strong>Nombre:</strong>
        <span>{{$departamento->nombre}}</span>
      </li>
      <li>
        <strong>Empleados:</strong>
        <ul style="margin-left: 2em; margin-top: .5em">
          @foreach($departamento->empleados as $empleado)
            <li><a href="{{route('empleado',['id'=>$empleado->id])}}">{{$empleado->nombre}}</a></li>
          @endforeach
        </ul>
      </li>
       <li>
        <strong>Jefe: </strong>
        <span><a href="{{route('departamentos.show',['departamento'=>$departamento->jefe->id])}}">{{$departamento->jefe->nombre}}</a></span>
      </li>
    </ul>
@endsection
