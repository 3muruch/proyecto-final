hola soy Milton Muruchi y para poder ver mi pagina web que tiene php y fue la unica manera de que ustedes lo puedan ver es esta: primero tienen
que descargar XAMPP(sino no lo tienen) luego ir ala carpeta de XAMPP y abrirla, luego abri la carpeta que dice "htdocs" y ahi ponen la carpeta de mi proyecto, 
despues abren el XAMPP y en la columna que dice ACTIONS ponen stop,stop y luego admin de la segunda fila, ahi les va abrir una pagina automaticamente, en el enlace
de la pagina le va aparece esto http://localhost/phpmyadmin/, bueno en el enlace borran "phpmyadmin" y ponen el nombre de la carpeta osea "proyecto" , que seria asi
http://localhost/proyecto/    ,ahi ponen enter y les va aparecer mi pagina. hice todo lo posible para mostrar mi pagina de otra menera pero no pude hacerlo, asi que esta fue la unica manera.

otra manera de poder ver la pagina es convertir el index.php a index.html. pero el problema va ser que el login y registro no va funcionar pero si van a poder ver la pagina bien.


explicado de mejor manera: 
# Proyecto Tienda m77

Este proyecto es una página web de una tienda de ropa que incluye funcionalidades implementadas con PHP, CSS y JavaScript.

## Cómo ejecutar este proyecto localmente

Para que puedan ver y probar el proyecto completo, que incluye archivos PHP, es necesario ejecutar el proyecto en un servidor local. A continuación, se explican los pasos para hacerlo con **XAMPP**.

### Pasos:

1. **Instalar XAMPP**:
   - Descarga e instala XAMPP desde [aquí](https://www.apachefriends.org/es/index.html).
   - XAMPP incluye un servidor Apache que permitirá ejecutar los archivos PHP.

2. **Clonar el repositorio**:
   - Descarga este repositorio como un archivo ZIP o clónalo utilizando Git.
   ```bash
   git clone https://github.com/tuusuario/tu-repositorio.git

3. **Mover los archivos a la carpeta de XAMPP**:
- Una vez que hayas descargado los archivos, cópialos a la carpeta htdocs de XAMPP.
- La ruta predeterminada para htdocs suele ser:
-En Windows: C:/xampp/htdocs/
-En Mac/Linux: /opt/lampp/htdocs/


4. **Iniciar el servidor Apache**:
   
- Abre el panel de control de XAMPP.
- Haz clic en "Start" para iniciar el servidor Apache.
  
5.**Acceder a la página web**:

- Abre tu navegador y visita la siguiente URL:

http://localhost/proyecto

5.Configurar la base de datos (SI ES NECESARIO):

Si el proyecto incluye una base de datos MySQL, debes crearla en phpMyAdmin (accesible desde http://localhost/phpmyadmin).
Importa el archivo .sql que viene con el proyecto (si lo tienes) y actualiza los archivos de conexión a la base de datos con las credenciales de MySQL.


ESTO ES POR SI LA BASE DE DATOS NO FUNCIONA

VAN AL ARCHIVO config.php en donde dice ("localhost:3309"),lo cambia a ("localhost:3306"), asi como este codigo(hacer si no funciona la base de datos:  
```bash 

<?php

  $conexion = mysqli_connect("localhost:3306", "root", "", "tienda");


?>

