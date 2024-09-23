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
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
            <p>&copy; 2024 Tienda de Ropa. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="script.js"></script>

</body>
</html>