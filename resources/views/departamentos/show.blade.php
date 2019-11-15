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
    </ul>
@endsection
