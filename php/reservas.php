<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_habitacion = $_POST['id_habitacion'];
    $nombre_cliente = $_POST['nombre'];
    $correo_cliente = $_POST['correo'];
    $fecha_entrada = $_POST['fecha_entrada'];
    $fecha_salida = $_POST['fecha_salida'];
    $total = $_POST['total'];

    $sql = "INSERT INTO reservas (id_habitacion, nombre_cliente, correo_cliente, fecha_entrada, fecha_salida, total)
            VALUES ('$id_habitacion', '$nombre_cliente', '$correo_cliente', '$fecha_entrada', '$fecha_salida', '$total')";

    if ($conexion->query($sql) === TRUE) {
        echo "Reserva realizada correctamente.";
    } else {
        echo "Error: " . $conexion->error;
    }
}
?>

