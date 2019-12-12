@extends('layouts.main')

@section('title', 'Proyectos')

@section('content')

  <h2>Proyectos</h2>
    <a href="{{route('proyectos.create')}}">Añadir</a>
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>Empleado</th>
        <th>Actions</th>
      </tr>
      @foreach($proyectos as $proyecto)
      <tr>
        <td><a href="{{route('proyectos.show',['proyecto'=>$proyecto->id])}}">{{$proyecto->id}}</a></td>
        <td>{{$proyecto->nombre}}</td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechafin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        <td><a href="{{route('empleado',['id' => $proyecto->empleado->id])}}">{{$proyecto->empleado->nombre}}</a></td>
        <td>
          <a href="{{route('proyectos.edit',['proyecto'=>$proyecto->id])}}" style="color: #151515">Editar</a>
          <button style="color: tomato;background-color: none; border:none" 
          onclick="this.parentNode.childNodes[5].submit()">Eliminar</button>

          <form class="deleteForm" method="post" action="{{route('proyectos.destroy',['proyecto'=>$proyecto->id])}}" style="display: none">@method('DELETE') @csrf
          </form>
        </td>
      </tr>
      @endforeach
    </table>
@endsection
