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
                    <input type="text" id="search-input" placeholder="Buscar..." onkeyup="searchProducts()">
                    <div id="search-results"></div>
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
                    <div class="product"onclick="showProductModal('Remera Oversize Beige', './img/remera4.jpeg',6000)">
                        <img src="./img/remera4.jpeg" alt="Remera Oversize Beige">
                        <div class="product-info">
                            <h3>Remera Oversize Beige</h3>
                            <p>$6000</p>
                            <button onclick="addToCart('Remera Oversize Beige', 6000)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product" onclick="showProductModal('Remera Oversize Black', './img/remera.jpeg', 6000)">
                        <img src="./img/remera.jpeg" alt="Remera Oversize Black">
                        <div class="product-info">
                            <h3>Remera Oversize Black</h3>
                            <p>$6000</p>
                            <button onclick="addToCart('Remera Oversize Black', 6000)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product" onclick="showProductModal('Remera Oversize White', './img/remera2.jpeg', 6000)">
                        <img src="./img/remera2.jpeg" alt="Remera Oversize White">
                        <div class="product-info">
                            <h3>Remera Oversize White</h3>
                            <p>$6000</p>
                            <button onclick="addToCart('Remera Oversize White', 6000)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product" onclick="showProductModal('Remera Oversize Marron', './img/remera3.jpg', 6000)">
                        <img src="./img/remera3.jpg" alt="Remera Oversize Marron">
                        <div class="product-info">
                            <h3>Remera Oversize Marron</h3>
                            <p>$6000</p>
                            <button onclick="addToCart('Remera Oversize Marron', 6000)">Agregar al carrito</button>
                        </div>
                    </div>
                </div>

                <!-- Segunda fila de productos (Joggers) -->
                <div class="row">
                    <div class="product"onclick="showProductModal('Joggers Black', './img/pantalon1.webp',10000)">
                        <img src="./img/pantalon1.webp" alt="Joggers Black">
                        <div class="product-info">
                            <h3>Joggers Black</h3>
                            <p>$10000</p>
                            <button onclick="addToCart('Joggers Black', 10000)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product"onclick="showProductModal('Joggers Gris', './img/pantalon2.webp',10000)">
                        <img src="./img/pantalon2.webp" alt="Joggers Gris">
                        <div class="product-info">
                            <h3>Joggers Gris</h3>
                            <p>$10000</p>
                            <button onclick="addToCart('Joggers Gris', 10000)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product" onclick="showProductModal('Joggers Gris Claro', './img/pantalon3.webp',10000)">
                        <img src="./img/pantalon3.webp" alt="Joggers Gris Claro">
                        <div class="product-info">
                            <h3>Joggers Gris Claro</h3>
                            <p>$10000</p>
                            <button onclick="addToCart('Joggers Gris Claro', 10000)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product" onclick="showProductModal('Joggers Beige', './img/pantalon4.webp',10000)">
                        <img src="./img/pantalon4.webp" alt="Joggers Beige">
                        <div class="product-info">
                            <h3>Joggers Beige</h3>
                            <p>$10000</p>
                            <button onclick="addToCart('Joggers Beige', 10000)">Agregar al carrito</button>
                        </div>
                    </div>
                </div>

                <!-- Fila de productos (Shorts) -->
                <div class="row">
                    <div class="product" onclick="showProductModal('Short Deportivo Black', './img/short1.webp',7000)">
                        <img src="./img/short1.webp" alt="Short Deportivo Black">
                        <div class="product-info">
                            <h3>Short Deportivo Black</h3>
                            <p>$7000</p>
                            <button onclick="addToCart('Short Deportivo Black', 7000)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product" onclick="showProductModal('Short Deportivo Gris', './img/short2.webp',7000)">
                        <img src="./img/short2.webp" alt="Short Deportivo Gris">
                        <div class="product-info">
                            <h3>Short Deportivo Gris</h3>
                            <p>$7000</p>
                            <button onclick="addToCart('Short Deportivo Gris', 7000)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product" onclick="showProductModal('Short Deportivo Beige', './img/short3.webp',7000)">
                        <img src="./img/short3.webp" alt="Short Deportivo Beige">
                        <div class="product-info">
                            <h3>Short Deportivo Beige</h3>
                            <p>$7000</p>
                            <button onclick="addToCart('Short Deportivo Beige', 7000)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product" onclick="showProductModal('Short Deportivo Rojo', './img/short4.webp',7000)">
                        <img src="./img/short4.webp" alt="Short Deportivo Azul">
                        <div class="product-info">
                            <h3>Short Deportivo Rojo</h3>
                            <p>$7000</p>
                            <button onclick="addToCart('Short Deportivo Azul', 7000)">Agregar al carrito</button>
                        </div>
                    </div>
                </div>

                <!-- Nueva fila de productos (Buzos) -->
                <div class="row">
                    <div class="product" onclick="showProductModal('Buzo Hoodie Black', './img/buzo1.webp',15000)">
                        <img src="./img/buzo1.webp" alt="Buzo Hoodie Black">
                        <div class="product-info">
                            <h3>Buzo Hoodie Black</h3>
                            <p>$15000</p>
                            <button onclick="addToCart('Buzo Hoodie Black', 15000)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product" onclick="showProductModal('Buzo Hoodie Beige', './img/buzo2.webp',15000)">
                        <img src="./img/buzo2.webp" alt="Buzo Hoodie Beige">
                        <div class="product-info">
                            <h3>Buzo Hoodie Beige</h3>
                            <p>$15000</p>
                            <button onclick="addToCart('Buzo Hoodie Beige', 15000)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product" onclick="showProductModal('Buzo Crewneck Azul', './img/buzo3.webp',15000)">
                        <img src="./img/buzo3.webp" alt="Buzo Crewneck Gris">
                        <div class="product-info">
                            <h3>Buzo Crewneck Azul</h3>
                            <p>$15000</p>
                            <button onclick="addToCart('Buzo Crewneck Gris', 15000)">Agregar al carrito</button>
                        </div>
                    </div>
                    <div class="product" onclick="showProductModal('Buzo Crewneck Gris', './img/buzo4.webpp',15000)">
                        <img src="./img/buzo4.webp" alt="Buzo Crewneck Azul">
                        <div class="product-info">
                            <h3>Buzo Crewneck Gris</h3>
                            <p>$15000</p>
                            <button onclick="addToCart('Buzo Crewneck Azul', 15000)">Agregar al carrito</button>
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
<!-- Modal -->
<div id="product-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="modal-inner">
            <img id="modal-product-image" src="" alt="Producto">
            <div class="modal-info">
                <h2 id="modal-product-name"></h2>
                <p id="modal-product-price"></p>
                
                <!-- Contenedor para talles -->
                <div class="size-container">
                    <label>Tamaño:</label>
                    <div class="size-option" onclick="selectSize('S')">S</div>
                    <div class="size-option" onclick="selectSize('M')">M</div>
                    <div class="size-option" onclick="selectSize('L')">L</div>
                    <div class="size-option" onclick="selectSize('XL')">XL</div>
                </div>

                <!-- Contenedor para cantidad -->
                <div class="quantity-container">
                    <label>Cantidad:</label>
                    <button class="quantity-button" onclick="changeQuantity(-1)">-</button>
                    <input type="number" id="quantity" value="1" min="1" readonly>
                    <button class="quantity-button" onclick="changeQuantity(1)">+</button>
                </div>
                <br>
                <button onclick="addToCartFromModal()">Agregar al Carrito</button>
            </div>
        </div>
    </div>
</div>


    <script src="script.js"></script>

</body>
</html>  