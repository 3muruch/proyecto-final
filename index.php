<!DOCTYPE html>  
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda m77</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">                     
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                <a href="index.php">
                    <img src="./img/logo.png" alt="Logo de Tienda m77">
                </div>
                
                <nav>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li>
            <a href="#">Productos</a>
            <div class="dropdown">
                
                <div class="product">Remera</div>
                <div class="product">Joggers</div>
                <div class="product">Short</div>
                <div class="product">Buzo</div>
            </div>
        </li>
                       <li><a href="#" id="contact-link">Contacto</a></li>
                    </ul>
                </nav>
                
                <div class="search-cart">
                    <input type="text" placeholder="Buscar...">
                    <button class="search-button"><i class="fas fa-search"></i></button>
                    <button class="user-button" onclick="window.location.href='login.php';"><i class="fas fa-user"></i></button>
                    <button class="cart-button"><i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </div>
    </header>
    
    <main>
        <section class="hero">
            <div class="container">
                <h2>Explora nuestra colección</h2>
                <p>Encuentra la ropa perfecta para cada ocasión.</p>
                <button class="explore-button">Explorar</button>
            </div>
        </section>

        <section class="product-grid">
            <div class="container">
                <h2>Nuevos Productos</h2>

                <!-- Primera fila de productos -->
                <div class="row">
                    <div class="product">
                        <img src="./img/remera4.jpeg" alt="Remera Oversize Beige">
                        <div class="product-info">
                            <h3>Remera Oversize Beige</h3>
                            <p>$25.00</p>
                            <button onclick="addToCart('Remera Oversize Beige', 25.00)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="./img/remera.jpeg" alt="Remera Oversize Black">
                        <div class="product-info">
                            <h3>Remera Oversize Black</h3>
                            <p>$40.00</p>
                            <button onclick="addToCart('Remera Oversize Black', 40.00)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="./img/remera2.jpeg" alt="Remera Oversize White">
                        <div class="product-info">
                            <h3>Remera Oversize White</h3>
                            <p>$30.00</p>
                            <button onclick="addToCart('Remera Oversize White', 30.00)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="./img/remera3.jpg" alt="Remera Oversize Marron">
                        <div class="product-info">
                            <h3>Remera Oversize Marron</h3>
                            <p>$120.00</p>
                            <button onclick="addToCart('Remera Oversize Marron', 120.00)">Agregar al carrito</button>
                        </div>
                    </div>
                </div>

                <!-- Segunda fila de productos (Joggers) -->
                <div class="row">
                    <div class="product">
                        <img src="./img/pantalon1.webp" alt="Joggers Black">
                        <div class="product-info">
                            <h3>Joggers Black</h3>
                            <p>$45.00</p>
                            <button onclick="addToCart('Joggers Black', 45.00)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="./img/pantalon2.webp" alt="Joggers Gris">
                        <div class="product-info">
                            <h3>Joggers Gris</h3>
                            <p>$50.00</p>
                            <button onclick="addToCart('Joggers Gris', 50.00)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="./img/pantalon3.webp" alt="Joggers Gris Claro">
                        <div class="product-info">
                            <h3>Joggers Gris Claro</h3>
                            <p>$150.00</p>
                            <button onclick="addToCart('Joggers Gris Claro', 150.00)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="./img/pantalon4.webp" alt="Joggers Beige">
                        <div class="product-info">
                            <h3>Joggers Beige</h3>
                            <p>$80.00</p>
                            <button onclick="addToCart('Joggers Beige', 80.00)">Agregar al carrito</button>
                        </div>
                    </div>
                </div>

                <!-- Fila de productos (Shorts) -->
                <div class="row">
                    <div class="product">
                        <img src="./img/short1.webp" alt="Short Deportivo Black">
                        <div class="product-info">
                            <h3>Short Deportivo Black</h3>
                            <p>$30.00</p>
                            <button onclick="addToCart('Short Deportivo Black', 30.00)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="./img/short2.webp" alt="Short Deportivo Gris">
                        <div class="product-info">
                            <h3>Short Deportivo Gris</h3>
                            <p>$35.00</p>
                            <button onclick="addToCart('Short Deportivo Gris', 35.00)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="./img/short3.webp" alt="Short Deportivo Beige">
                        <div class="product-info">
                            <h3>Short Deportivo Beige</h3>
                            <p>$40.00</p>
                            <button onclick="addToCart('Short Deportivo Beige', 40.00)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="./img/short4.webp" alt="Short Deportivo Azul">
                        <div class="product-info">
                            <h3>Short Deportivo Azul</h3>
                            <p>$45.00</p>
                            <button onclick="addToCart('Short Deportivo Azul', 45.00)">Agregar al carrito</button>
                        </div>
                    </div>
                </div>

                <!-- Nueva fila de productos (Buzos) -->
                <div class="row">
                    <div class="product">
                        <img src="./img/buzo1.webp" alt="Buzo Hoodie Black">
                        <div class="product-info">
                            <h3>Buzo Hoodie Black</h3>
                            <p>$60.00</p>
                            <button onclick="addToCart('Buzo Hoodie Black', 60.00)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="./img/buzo2.webp" alt="Buzo Hoodie Beige">
                        <div class="product-info">
                            <h3>Buzo Hoodie Beige</h3>
                            <p>$65.00</p>
                            <button onclick="addToCart('Buzo Hoodie Beige', 65.00)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="./img/buzo3.webp" alt="Buzo Crewneck Gris">
                        <div class="product-info">
                            <h3>Buzo Crewneck Gris</h3>
                            <p>$70.00</p>
                            <button onclick="addToCart('Buzo Crewneck Gris', 70.00)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product">
                        <img src="./img/buzo4.webp" alt="Buzo Crewneck Azul">
                        <div class="product-info">
                            <h3>Buzo Crewneck Azul</h3>
                            <p>$75.00</p>
                            <button onclick="addToCart('Buzo Crewneck Azul', 75.00)">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="cart">
            <div class="container">
                <h2>Carrito de Compras</h2>
                <ul id="cart-items"></ul>
                <p id="total">Total: $0.00</p>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-socials">
                <a href="https://www.instagram.com/milton_0510/?next=%2F"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@milton1482"><i class="fab fa-youtube"></i></a>
                <a href="https://www.tiktok.com/@m7ruch1?lang=es"><i class="fab fa-tiktok"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
            <p>&copy; 2024 Tienda de Ropa. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Sección del formulario de contacto (oculta por defecto) -->
<div id="contact-form" class="contact-form" style="display: none;">
    <div class="form-container">
        <h3>Contacto</h3>
        <form id="form-contact" action="#" method="post" onsubmit="return showSuccessMessage(event)">
    <!-- Los campos del formulario -->
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="phone">Teléfono (opcional):</label>
    <input type="tel" id="phone" name="phone" placeholder="Ej: 1234567890">
    
    <label for="message">Mensaje:</label>
    <textarea id="message" name="message" rows="4" required></textarea>
    
    <button type="submit">Enviar</button>
    <button type="button" onclick="closeContactForm()">Cerrar</button>
</form>

    </div>
</div>

    <script src="script.js"></script>

</body>
</html>  