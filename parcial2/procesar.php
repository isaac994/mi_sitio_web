<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $consulta = $_POST['consulta'];

    $servicios = [
        "Examen de vista - Bs 50",
        "Armazón clásico - Bs 180",
        "Lentes de sol - Bs 120"
    ];

    echo "Cita reservada en Óptica Mirasol";
    echo $nombre;
    echo $correo;
    echo $consulta;

    foreach ($servicios as $servicio) {
        echo "<br>" . $servicio;
    }

    echo "Te atiende Isaac Mico Serna";
?>
?>

