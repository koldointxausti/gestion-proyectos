@extends('layouts.main')

@section('title', 'Empleados')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Departamento</th>
        <th>Proyecto asignado</th>
      </tr>
      @foreach($empleados as $empleado)
      <tr>
        <td><a href="{{route('empleado',['id'=>$empleado->id])}}">{{$empleado->id}}</a></td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->apellido}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        <td>
          @isset($empleado->departamento)
            <a href="{{route('departamentos.show',['id'=>$empleado->departamento->id])}}">{{$empleado->departamento->nombre}}</a>
          @else - @endisset
        </td>
        <td>
          @isset($empleado->proyecto)
            <a href="{{route('proyectos.show',['proyecto'=>$empleado->proyecto->id])}}">{{$empleado->proyecto->nombre}}</a>
          @else - @endisset
        </td>
      </tr>
      @endforeach
    </table>

@endsection
