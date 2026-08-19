@extends('layouts.base')

@section('title', 'Ferretería El Tornillo')
@section('h1', 'Ferretería El Tornillo')

@section('content')
    <p>Ferretería de barrio donde encontrás las herramientas que necesitás para tus arreglos de todos los días.</p>

    <p>Hay {{ count($herramientas) }} herramientas en el inventario.</p>

    <ul>
        @foreach ($herramientas as $herramienta)
            <li>{{ $herramienta->nombre }} - Bs {{ $herramienta->precio }}</li>
        @endforeach
    </ul>

    <p>Inventario atendido por Isaac Mico Serna</p>

    <a href="/herramientas/nuevo">Registrar nueva herramienta</a>
@endsection
