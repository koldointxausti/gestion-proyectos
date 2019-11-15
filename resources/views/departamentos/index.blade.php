@extends('layouts.main')

@section('title', 'Departamentos')

@section('content')

  <h2>Departamentos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
    @foreach($departamentos as $departamento)
    <tr>
      <td><a href="{{route('departamento',['id'=>$departamento->id])}}">{{$departamento->id}}</a></td>
      <td>{{$departamento->nombre}}</td>
    </tr>
    @endforeach
  </table>

@endsection
