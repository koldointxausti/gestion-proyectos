@extends('layouts.main')

@section('title', 'Proyectos')

@section('content')

  <h2>Proyectos</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>Empleado</th>
      </tr>
      @foreach($proyectos as $proyecto)
      <tr>
        <td><a href="{{route('proyecto',['id'=>$proyecto->id])}}">{{$proyecto->id}}</a></td>
        <td>{{$proyecto->nombre}}</td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechafin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        <td><a href="{{route('empleado',['id' => $proyecto->empleado->id])}}">{{$proyecto->empleado->nombre}}</a></td>
      </tr>
      @endforeach
    </table>

@endsection
