@extends('layouts.base')

@section('title', 'Login')
@section('h1', 'Entrar al panel')

@section('content')
    @if (session('error'))
        <p class="error"><strong>{{ session('error') }}</strong></p>
    @endif

    <form action="/login" method="POST">
        @csrf

        <label for="email">Correo</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Entrar</button>
    </form>
@endsection
