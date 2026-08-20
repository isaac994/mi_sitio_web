@extends('layouts.base')

@section('title', 'Contacto')
@section('h1', 'Contacto')

@section('content')
    <div class="contacto-card">
        @if (session('enviado'))
            <p class="exito">{{ session('enviado') }}</p>
        @endif

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <p class="contacto-intro">¿Tenés una consulta? Escribinos y te respondemos a la brevedad.</p>

        <form action="/contacto" method="POST">
            @csrf

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">

            <label for="email">Correo</label>
            <input type="email" id="email" name="email">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="4"></textarea>

            <button type="submit" class="btn btn-block">Enviar mensaje</button>
        </form>
    </div>
@endsection
