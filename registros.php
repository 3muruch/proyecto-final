<?php
include 'config.php';

 
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $contraseña = $_POST['contraseña'];

      

       
 $query = "INSERT INTO usuarios (nombre, email , telefono, contraseña) VALUES ('$nombre', '$email', ' $telefono ', ' $contraseña')";


  $ejecutar = mysqli_query($conexion, $query);


?>
