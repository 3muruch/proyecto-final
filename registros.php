<?php
include 'config.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$contraseña = $_POST['contraseña'];

// Hash de la contraseña
$contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

$query = "INSERT INTO usuarios (nombre, email, telefono, contraseña) VALUES ('$nombre', '$email', '$telefono', '$contraseña_hash')";
$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo "Usuario registrado exitosamente.";
} else {
    echo "Error al registrar el usuario.";
}
?>
