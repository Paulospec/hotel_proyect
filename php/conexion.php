<?php
$host = "localhost";           // porque tu MySQL corre en la misma PC
$usuario = "usuario_remoto";   // usuario que creaste
$contrasena = "tu_contraseña"; // la contraseña que asignaste
$bd = "hotel_paraiso";         // el nombre de la base

$conexion = new mysqli($host, $usuario, $contrasena, $bd);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
// echo "Conectado correctamente"; // opcional para prueba
?>
