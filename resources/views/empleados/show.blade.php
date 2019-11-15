@extends('layouts.main')

@section('title', $empleado->nombre)

@section('content')

  <h2>{{$empleado->nombre}}</h2>

    <ul>
      <li>
        <strong>Id:</strong>
        <span>{{$empleado->id}}</span>
      </li>
      <li>
        <strong>Nombre:</strong>
        <span>{{$empleado->nombre}}</span>
      </li>
      <li>
        <strong>Apellido:</strong>
        <span>{{$empleado->apellido}}</span>
      </li>
      <li>
        <strong>Email:</strong>
        <span>{{$empleado->email}}</span>
      </li>
      <li>
        <strong>Telefono:</strong>
        <span>{{$empleado->telefono}}</span>
      </li>

      @isset($empleado->proyecto)
      <li>
        <strong>Proyecto asignado:</strong>
        <span><a href="{{route('proyecto',['id'=>$empleado->proyecto->id])}}">{{$empleado->proyecto->nombre}}</a></span>
      </li>
      @endisset
    </ul>
@endsection
