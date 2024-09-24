<?php 
include 'config.php';

$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

// Busca el usuario por email
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email'");

if (mysqli_num_rows($validar_login) > 0) {
    $usuario = mysqli_fetch_assoc($validar_login);
    // Verifica la contraseña
    if (password_verify($contraseña, $usuario['contraseña'])) {
        header("location: index.php");
        exit;
    } else {
        echo '
            <script>
            alert("Contraseña incorrecta, por favor verifique los datos introducidos");
            window.location = "login.php";
            </script>
        ';
        exit;
    }
} else {
    echo '
        <script>
        alert("Usuario no existe, por favor verifique los datos introducidos");
        window.location = "login.php";
        </script>
    ';
    exit;
}
?>
