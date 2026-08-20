@extends('layouts.base')

@section('title', 'Panel')
@section('h1', 'Tienda de Celulares y Accesorios Cochabamba')

@section('content')
    <div class="panel-header">
        <div>
            <h2>Bienvenido, {{ Auth::user()->name }}</h2>
            <p>Desde acá administrás el inventario de celulares de la tienda: podés ver el catálogo completo y agregar nuevos equipos.</p>
        </div>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-salir">Salir</button>
        </form>
    </div>

    <p class="contador">Hay {{ count($productos) }} celulares en el catálogo.</p>

    <ul>
        @foreach ($productos as $producto)
            <li>{{ $producto->nombre }} ({{ $producto->marca }}) - Bs {{ $producto->precio }}</li>
        @endforeach
    </ul>
@endsection
