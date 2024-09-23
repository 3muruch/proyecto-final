<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Tienda m77</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="./img/logo.png" alt="Logo de Tienda m77">
                </div>
                
                <nav>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </nav>
                
                <div class="search-cart">
                    <input type="text" placeholder="Buscar...">
                    <button class="search-button"><i class="fas fa-search"></i></button>
                    <button class="user-button"><i class="fas fa-user"></i></button>
                    <button class="cart-button"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
    </header>
    
    <main>
        <section class="registro">
            <div class="container">
                <h2>Crear una Cuenta</h2>
                <form action="registro.php" method="POST">
                    <div class="form-group">
                        <label for="first-name">Nombre Completo:</label>
                        <input type="text" id="first-name" name="nombre" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono (opcional):</label>
                        <input type="tel" id="phone" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="contraseña" required>
                    </div>
                  
                    <button type="submit">Crear Cuenta</button>
                </form>
                <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-socials">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
            <p>&copy; 2024 Tienda de Ropa. Todos los derechos reservados.</p>
        </div>
    </footer>

    <?php
    include("registros.php");
    ?>
</body>
</html>
