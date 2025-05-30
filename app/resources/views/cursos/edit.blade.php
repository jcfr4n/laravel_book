@extends('layouts.plantilla')

@section('title','Editar curso')

@section('content')
    <h1>Hola desde la ruta cursos.</h1>
    <style>
        .forminput {
            width: 400px;
            margin: 20px 0;
        }

        .forminput label {
            display: block;
            margin-bottom: 10px;
            width: 100%;
        }

        .forminput input,
        .forminput textarea {
            width: 100%;
        }
    </style>
    <h1>En esta página se podrá modificar un curso</h1>
    {{-- form cursos --}}

    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="forminput">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre', $curso->nombre) }}">
            @error('nombre')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <div class="forminput">
            <label for="descripcion">descripcion</label>
            <textarea name="descripcion" rows="5" >{{ old('descripcion', $curso->descripcion) }}</textarea>
            @error('descripcion')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <div class="forminput">
            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
            @error('categoria')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <div class="forminput">
            <button type="submit">Enviar</button>
        </div>
    </form>
@endsection
