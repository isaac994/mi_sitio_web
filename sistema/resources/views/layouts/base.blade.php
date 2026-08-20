<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tienda de Celulares y Accesorios Cochabamba')</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
<header>
    <h1>@yield('h1', 'Tienda de Celulares y Accesorios Cochabamba')</h1>
    <nav>
        <a href="/panel">Inicio</a>
        <a href="/productos">Productos</a>
        <a href="/contacto">Contacto</a>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer>
    toddos los derechos reservados - Isaac Mico Serna - 18 de agosto de 2026
</footer>
</body>
</html>
