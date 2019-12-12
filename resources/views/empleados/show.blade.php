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

      @isset($empleado->proyectos)
        <li>
          <strong>Colabora en estos proyectos:</strong>
          @foreach($empleado->proyectos as $proyecto)
            <ul style="margin: .5em 0; margin-left: 1.5em">
              <li><a href="{{route('proyectos.show',['proyecto'=>$proyecto->id])}}">{{$proyecto->nombre}}</a></li>
            </ul>
          @endforeach
        </li>
      @endisset

      @isset($empleado->departamento)
      <li>
        <strong>Departamento:</strong>
        <span><a href="{{route('departamentos.show',['id'=>$empleado->departamento->id])}}">{{$empleado->departamento->nombre}}</a></span>
      </li>
      @endisset
      @isset($empleado->proyecto)
      <li>
        <strong>Proyecto asignado:</strong>
        <span><a href="{{route('proyectos.show',['proyecto'=>$empleado->proyecto->id])}}">{{$empleado->proyecto->nombre}}</a></span>
      </li>
      @endisset
    </ul>
@endsection
