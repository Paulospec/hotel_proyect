<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];

    if ($contrasena !== $contrasena2) {
        die("Las contraseñas no coinciden.");
    }

    $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, correo, telefono, contrasena) VALUES ('$nombre', '$correo', '$telefono', '$contrasena_hash')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: ../login.html"); // redirige al login
    } else {
        echo "Error: " . $conexion->error;
    }
}
?>
