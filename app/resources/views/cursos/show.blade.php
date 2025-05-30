@extends('layouts.plantilla')

@section('title','Curso ' . $curso->nombre)

@section('content')
    <h1>Hola desde la ruta cursos.</h1>

    <h2>Bienvenido al curso.</h2>
    <h3>Nombre: {{$curso->nombre}}</h3>
    <h3>Descripcion: {{$curso->descripcion}}</h3>
    <h3>Categoria: {{$curso->categoria}}</h3>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <a href="{{route('cursos.edit', $curso->id)}}">Editar curso</a>
    <form action="{{route('cursos.destroy', $curso->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar curso</button>
    </form>
@endsection
