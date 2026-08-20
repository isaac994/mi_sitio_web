@extends('layouts.base')

@section('title', 'Productos')
@section('h1', 'Nuestros Celulares')

@section('content')
    <p>Hay {{ count($productos) }} celulares en el catálogo.</p>

    <ul>
        @foreach ($productos as $producto)
            <li>{{ $producto->nombre }} ({{ $producto->marca }}) - Bs {{ $producto->precio }}  - Stock: {{ $producto->stock }}</li>
        @endforeach
    </ul>

    <a href="/productos/nuevo">Agregar celular</a>
@endsection
