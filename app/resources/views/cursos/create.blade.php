@extends('layouts.plantilla')

@section('title', 'Crear Curso')

@section('content')
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
    <h1>En esta página se podrá crear un curso</h1>
    {{-- form cursos --}}
    <form action="{{ route('cursos.dataFormCursos') }}" method="POST">
        @csrf
        <div class="forminput">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}">
            @error('nombre')
                <small>*{{ $message }}</small>
            @enderror
        </div>
        <div class="forminput">
            <label for="descripcion">descripcion</label>
            <textarea name="descripcion" rows="5">{{ old('descripcion') }}</textarea>
        </div>
        @error('descripcion')
            <small>*{{ $message }}</small>
        @enderror
        <div class="forminput">
            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" value="{{ old('categoria') }}">
        </div>
        @error('categoria')
            <small>*{{ $message }}</small>
        @enderror
        <div class="forminput">
            <button type="submit">Guardar</button>
        </div>
    </form>

@endsection
