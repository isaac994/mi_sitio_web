@extends('layouts.base')

@section('title', 'Ferretería El Tornillo')
@section('h1', 'Ferretería El Tornillo')

@section('content')
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/herramientas/nuevo" method="POST">
        @csrf

        <label for="nombre">Nombre de la herramienta</label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="precio">Precio en Bs</label>
        <input type="number" id="precio" name="precio"><br>

        <button type="submit">Registrar herramienta</button>
    </form>
@endsection
