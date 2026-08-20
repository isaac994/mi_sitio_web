@extends('layouts.base')

@section('title', 'Nuevo celular')
@section('h1', 'Agregar celular')

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

    <form action="/productos/nuevo" method="POST">
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="marca">Marca</label>
        <input type="text" id="marca" name="marca"><br>

        <label for="precio">Precio en Bs</label>
        <input type="number" id="precio" name="precio"><br>
        <div>
        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock" value="{{ old('stock') }}">
        </div>
        <button type="submit">Guardar celular</button>
    </form>
@endsection
