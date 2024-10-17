<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $contraseña = $_POST['contraseña'];

    // Hash de la contraseña
    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios (nombre, email, telefono, contraseña) VALUES ('$nombre', '$email', '$telefono', '$contraseña_hash')";
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        // Redirecciona a login.php o a una página de éxito
        echo '
            <script>
            alert("Usuario registrado exitosamente.");
            window.location = "login.php"; // Cambia a donde quieras redirigir
            </script>
        ';
    } else {
        echo '
            <script>
            alert("Error al registrar el usuario: ' . mysqli_error($conexion) . '");
            window.location = "registro.php"; // Regresa a la página de registro
            </script>
        ';
    }
}
?>