@extends('layouts.main')

@section('title', isset($proyecto) ? 'Edición '.$proyecto->nombre : 'Creación de Proyecto')

@section('content')
  <form 
    @isset($proyecto) action="{{route('proyectos.update',['proyecto'=>$proyecto->id])}}"
    @else action="{{route('proyectos.store')}}" @endisset
  method="post">
    @isset($proyecto) @method('PUT')  @endisset
    @csrf
    <input type="text" name="nombre" placeholder="nombre" @isset($proyecto) value="{{$proyecto->nombre}}" disabled @endisset>
    <input type="text" name="titulo" placeholder="titulo" @isset($proyecto) value="{{$proyecto->titulo}}" @endisset>
    <input type="date" name="f_inicio" placeholder="fecha de inicio" @isset($proyecto) value="{{$proyecto->fechainicio}}" @endisset>
    <input type="date" name="f_fin" placeholder="fecha final" @isset($proyecto) value="{{$proyecto->fechafin}}" @endisset>
    <input type="number" name="h_estimadas" placeholder="horas estimadas" @isset($proyecto) value="{{$proyecto->horasestimadas}}" @endisset>
    <select name="empleado_id">
      @foreach($empleados as $empleado)
        <option value="{{$empleado->id}}" 
        @isset($proyecto) 
          @if($proyecto->empleado_id == $empleado->id)
            selected
          @endif
        @endisset >{{$empleado->nombre}}</option>
      @endforeach
    </select>
    <input type="submit" name="submit" @isset($proyecto)value="Editar" @else value="Crear" @endisset>
  </form>
@endsection