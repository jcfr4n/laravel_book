@extends('layouts.plantilla')

@section('title', 'Contáctanos')
@section('content')
@section('content')
    @if (session('msgContacto'))
        <script>
            alert("{{ session('msgContacto') }}");
        </script>
    @endif
    <H1>Bienvenido a contáctanos</H1>
    <form action="{{ route('contactanos.store') }}" method="POST">
        @csrf
        <div class="forminput">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
            @error('nombre')
                <small class="text-danger" style="color: red">{{ $message }}</small>
            @enderror
        </div>
        <div class="forminput">
            <label for="correo">Correo:</label>
            <input type="text" name="correo" id="correo" value="{{ old('correo') }}">
            @error('correo')
                <small class="text-danger" style="color: red">{{ $message }}</small>
            @enderror
        </div>
        <div class="forminput">
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" rows="5">{{ old('mensaje') }}</textarea>
            @error('mensaje')
                <small class="text-danger" style="color: red">{{ $message }}</small>
            @enderror
        </div>
        <div class="forminput">
            <button type="submit">Enviar mensaje</button>
        </div>
    </form>

@endsection
<style>
    .forminput {
        width: 400px;
        margin: 20px auto;
    }

    .forminput label {
        display: block;
        margin-bottom: 10px;
        width: 100%;
    }

    .forminput input,
    .forminput textarea {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
</style>
