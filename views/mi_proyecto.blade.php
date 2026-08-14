<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celulares y Accesorios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Celulares y Accesorios</h1>
        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#servicios">Servicios</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </header>

    <main>
        <section id="inicio">
            <h2>celulares y accesorios</h2>
            <p>Vendemos celulares nuevos y usados, además de accesorios como fundas, vidrios templados, cargadores y audífonos.</p>
        </section>

        <section id="servicios">
            <h2>Nuestros Servicios</h2>
            <p>Venta de celulares, venta de accesorios, y reparación básica de equipos.</p>
        </section>

        <section id="contacto">
    <h2>Contacto</h2>
    <p>Escríbenos a: isacmico50@gmail.com</p>
    <p>WhatsApp:63994936</p>

    <form action="procesar.php" method="POST">
    <label for="nombre">Tu nombre</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="correo">Tu correo</label>
    <input type="email" id="correo" name="correo" required>

    <label for="mensaje">Tu mensaje</label>
    <textarea id="mensaje" name="mensaje" placeholder="Escribe tu consulta..."></textarea>

    <button type="submit">Enviar</button>
</form>
</section>
<section id="horarios">
    <h2>Horario de Atención</h2>
    <button id="btnHorario">Ver horario</button>
    <p id="textoHorario" style="display: none;">
        Lunes a Viernes: 9:00 - 19:00<br>
        Sábados: 9:00 - 13:00
    </p>
</section>
    </main>

    <footer>
        <p>&copy; 2026 isaac. Todos los derechos reservados.</p>
    </footer>
  <script src="script.js"></script>
</body>
</html>
