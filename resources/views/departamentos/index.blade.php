@extends('layouts.main')

@section('title', 'Departamentos')

@section('content')

  <h2>Departamentos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Jefe</th>
    </tr>
    @foreach($departamentos as $departamento)
    <tr>
      <td><a href="{{route('departamentos.show',['id'=>$departamento->id])}}">{{$departamento->id}}</a></td>
      <td>{{$departamento->nombre}}</td>
      <td>
          <a href="{{route('empleado',['id'=>$departamento->jefe->id])}}">{{$departamento->jefe->nombre}}</a>
        </td>
    </tr>
    @endforeach
  </table>

@endsection
