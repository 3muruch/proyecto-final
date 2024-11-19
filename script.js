let cartItems = []; // Array para almacenar los productos del carrito

// Función para agregar productos al carrito
function addToCart(productName, productPrice) {
    const existingProduct = cartItems.find(item => item.name === productName);
    if (existingProduct) {
        existingProduct.quantity += 1; // Aumentar la cantidad si ya existe
    } else {
        cartItems.push({ name: productName, price: productPrice, quantity: 1 }); // Agregar como nuevo
    }
    updateCartDetails(); // Actualizar la visualización del carrito
}

// Función para actualizar los detalles del carrito
function updateCartDetails() {
    const cartDetails = document.getElementById('cart-details');
    cartDetails.innerHTML = '<h3>Detalles del Carrito</h3>'; // Reinicia el contenido

    let total = 0; // Inicializar total
    cartItems.forEach(item => {
        total += item.price * item.quantity; // Sumar al total
        cartDetails.innerHTML += `
            <p>
                ${item.name} - $${item.price} (Cantidad: ${item.quantity}) 
                <button onclick="removeFromCart('${item.name}')">Eliminar</button>
            </p>`; // Agregar el producto
    });

    cartDetails.innerHTML += `<p>Total: $${total}</p>`; // Mostrar el total
    cartDetails.innerHTML += '<button class="checkout-button">Proceder al Pago</button>'; // Agregar botón de pago
}

// Función para eliminar productos del carrito
function removeFromCart(productName) {
    cartItems = cartItems.filter(item => item.name !== productName); // Filtrar el producto
    updateCartDetails(); // Actualizar la visualización
}

// Función para mostrar/ocultar detalles del carrito
function toggleCartDetails() {
    const cartDetails = document.getElementById('cart-details');
    cartDetails.style.display = (cartDetails.style.display === 'none' || cartDetails.style.display === '') ? 'block' : 'none'; // Alternar visibilidad
}


document.querySelector('.checkout-button').addEventListener('click', function() {
    // Verifica si hay elementos en el carrito
    if (cartItems.length === 0) {
        alert("Tu carrito está vacío. Agrega productos antes de proceder al pago.");
        return;
    }

    // Muestra el modal
    document.getElementById('payment-modal').style.display = "block";
    updateOrderSummary();
});

// Función para actualizar el resumen del pedido
function updateOrderSummary() {
    const summaryDetails = document.getElementById('summary-details');
    summaryDetails.innerHTML = ''; // Reinicia el contenido

    let total = 0; // Inicializar total
    cartItems.forEach(item => {
        total += item.price; // Sumar al total
        summaryDetails.innerHTML += `<p>${item.name} - $${item.price}</p>`; // Agregar el producto
    });

    summaryDetails.innerHTML += `<p>Total: $${total}</p>`; // Mostrar el total
    document.getElementById('order-summary').style.display = "block"; // Muestra el resumen
    document.getElementById('payment-form').style.display = "none"; // Ocultar el formulario de pago
}

// Función para cerrar el modal
function closeModal() {
    document.getElementById('payment-modal').style.display = "none";
    document.getElementById('order-summary').style.display = "none"; // Ocultar resumen al cerrar
    document.getElementById('payment-form').reset(); // Reiniciar el formulario
}

// Manejar el evento de envío del formulario
document.getElementById('payment-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el comportamiento por defecto
    updateOrderSummary(); // Mostrar el resumen del pedido
});


// Función para mostrar el formulario de contacto
document.getElementById('contact-link').onclick = function(event) {
    event.preventDefault(); // Evita que se recargue la página
    document.getElementById('contact-form').style.display = 'flex';
};

// Función para cerrar el formulario de contacto
function closeContactForm() {
    document.getElementById('contact-form').style.display = 'none';
}

// Función para mostrar un mensaje de éxito
function showSuccessMessage(event) {
    event.preventDefault();  // Prevenir el envío del formulario
    
    // Crear y mostrar el mensaje de éxito
    alert('¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.');
    
    // Opcionalmente puedes vaciar los campos del formulario
    document.getElementById('form-contact').reset();

    return false;  // Prevenir el comportamiento por defecto
}

// Lista de productos
const products = [
    { name: "Remera Black", image: "./img/remera.jpeg", price: 25 },
    { name: "Remera White", image: "./img/remera2.jpeg", price: 25 },
    { name: "Remera Marron", image: "./img/remera3.jpg", price: 25 },
    { name: "Remera Beige", image: "./img/remera4.jpeg", price: 25 },
    { name: "Joggers Black", image: "./img/pantalon1.webp", price: 30 },
    { name: "Joggers Gris", image: "./img/pantalon2.webp", price: 30 },
    { name: "Joggers Gris Claro", image: "./img/pantalon3.webp", price: 30 },
    { name: "Joggers Beige", image: "./img/pantalon4.webp", price: 30 },
    { name: "Short Deportivo Black", image: "./img/short1.webp", price: 20 },
    { name: "Short Deportivo Gris", image: "./img/short2.webp", price: 20 },
    { name: "Short Deportivo Beige", image: "./img/short3.webp", price: 20 },
    { name: "Short Deportivo Rojo", image: "./img/short4.webp", price: 20 },
    { name: "Buzo Hoodie Black", image: "./img/buzo1.webp", price: 35 },
    { name: "Buzo Hoodie Beige", image: "./img/buzo2.webp", price: 35 },
    { name: "Buzo Hoodie Azul", image: "./img/buzo3.webp", price: 35 },
    { name: "Buzo Hoodie Gris", image: "./img/buzo4.webp", price: 35 },
    { name: "Jean Cargo Mom Negro", image: "./img/jean1.jpg", price: 35 },
    { name: "Jean Cargo Mom Beige", image: "./img/jean2.jpg", price: 35 },
    { name: "Jean Cargo Mom Marron", image: "./img/jean3.jpg", price: 35 },
    { name: "Jean Cargo Mom Azul", image: "./img/jean4.jpg", price: 35 }
];

// Función de búsqueda de productos
function searchProducts() {
    const searchInput = document.getElementById("search-input").value.toLowerCase();
    const searchResults = document.getElementById("search-results");

    searchResults.innerHTML = ''; // Limpiar resultados previos
    searchResults.style.display = 'none'; // Ocultar resultados por defecto

    if (searchInput !== '') {
        const filteredProducts = products.filter(product => 
            product.name.toLowerCase().includes(searchInput)
        );

        if (filteredProducts.length > 0) {
            filteredProducts.forEach(product => {
                const resultItem = document.createElement("div");
                resultItem.classList.add("search-item");
                resultItem.innerHTML = `
                    <img src="${product.image}" alt="${product.name}">
                    ${product.name}
                `;
                resultItem.onclick = function() {
                    showProductModal(product.name, product.image, product.price); // Usa la función del modal
                };
                searchResults.appendChild(resultItem);
            });
            searchResults.style.display = 'block'; // Mostrar resultados
        } else {
            searchResults.innerHTML = '<div>No se encontraron productos.</div>';
            searchResults.style.display = 'block'; // Mostrar el mensaje
        }
    } else {
        searchResults.style.display = 'none'; // Ocultar si el input está vacío
    }
}

// Función para mostrar el modal del producto

function showProductModal(name, image, price) {
    document.getElementById('modal-product-name').textContent = name;
    document.getElementById('modal-product-image').src = image;
    document.getElementById('modal-product-price').textContent = `Precio: $${Math.floor(price)}`; // Mostrar sin decimales
    document.getElementById('product-modal').style.display = 'block'; // Mostrar el modal
}


// Función para cerrar el modal
function closeModal() {
    document.getElementById('product-modal').style.display = 'none';
}


// Función para agregar el producto al carrito
function addProductToCart() {
    const productName = document.getElementById('modal-product-name').textContent;
    const size = document.getElementById('size-select').value; // Cambiado a size-select
    const quantity = parseInt(document.getElementById('quantity-input').value); // Cambiado a quantity-input
    const productPrice = products.find(p => p.name === productName).price; // Obtener el precio del producto

    for (let i = 0; i < quantity; i++) {
        addToCart(productName + ` (Tamaño: ${size})`, productPrice); // Agregar al carrito con el tamaño
    }

    closeModal(); // Cierra el modal después de agregar al carrito
}

// Evento para cerrar el modal al hacer clic fuera de él
window.onclick = function(event) {
    const modal = document.getElementById('product-modal');
    if (event.target === modal) {
        closeModal();
    }
};
let selectedSize = 'S'; // Tamaño seleccionado por defecto

// Función para seleccionar un tamaño
function selectSize(size) {
    selectedSize = size; // Actualiza el tamaño seleccionado
    const sizeOptions = document.querySelectorAll('.size-option');
    sizeOptions.forEach(option => {
        option.style.backgroundColor = ''; // Reinicia el color de fondo
    });
    // Resalta el tamaño seleccionado
    event.target.style.backgroundColor = '#d0f0c0'; // Color de fondo al seleccionar
}

// Función para cambiar la cantidad
function changeQuantity(delta) {
    const quantityInput = document.getElementById('quantity');
    let currentQuantity = parseInt(quantityInput.value);
    currentQuantity += delta; // Ajusta la cantidad
    if (currentQuantity < 1) currentQuantity = 1; // Evita cantidades negativas
    quantityInput.value = currentQuantity; // Actualiza el input
}

// Modificar la función para agregar el producto al carrito
function addToCartFromModal() {
    const productName = document.getElementById('modal-product-name').textContent;
    const quantity = parseInt(document.getElementById('quantity').value);
    const productPrice = Math.round(parseFloat(document.getElementById('modal-product-price').textContent.replace('Precio: $', ''))); // Precio sin decimales
    for (let i = 0; i < quantity; i++) {
        addToCart(`${productName} (${selectedSize})`, productPrice);
    }
    closeModal(); // Cierra el modal después de agregar al carrito
}

document.querySelectorAll('.dropdown a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault(); // Evita el comportamiento por defecto del enlace

        const targetId = this.getAttribute('href'); // Obtiene el ID del destino
        const targetElement = document.querySelector(targetId); // Selecciona el elemento de destino

        // Desplazamiento suave
        targetElement.scrollIntoView({
            behavior: 'smooth'
        });
    });
});

document.querySelectorAll('.dropdown a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault(); // Evita el comportamiento por defecto del enlace

        const targetId = this.getAttribute('href'); // Obtiene el ID del destino
        const targetElement = document.querySelector(targetId); // Selecciona el elemento de destino

        // Desplazamiento suave
        const offset = 100; // Ajusta este valor según la altura de tu encabezado
        const elementPosition = targetElement.getBoundingClientRect().top; // Obtiene la posición del elemento
        const offsetPosition = elementPosition + window.pageYOffset - offset; // Ajusta la posición

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const sizeGuideLink = document.getElementById('size-guide-link');
    const sizeGuideDropdown = document.getElementById('size-guide-dropdown');
    const guideItems = document.querySelectorAll('.guide-item');
    const sizeGuideModal = document.getElementById('size-guide-modal');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const guideTitle = document.getElementById('guide-title');
    const guideImage = document.getElementById('guide-image');
  
    // Mostrar el submenú de la Guía de Talles al hacer clic
    sizeGuideLink.addEventListener('click', function(event) {
      event.preventDefault(); // Prevenir acción por defecto del enlace
      sizeGuideDropdown.style.display = sizeGuideDropdown.style.display === 'block' ? 'none' : 'block'; // Alternar el estado del submenú
    });
  
    // Mostrar el modal con la imagen de la guía de talles al hacer clic en una opción
    guideItems.forEach(item => {
      item.addEventListener('click', function(event) {
        event.preventDefault(); // Prevenir acción por defecto del enlace
  
        const guide = item.getAttribute('data-guide');
        
        let title = "";
        let imageSrc = "";
        
        // Dependiendo de la guía seleccionada, establecer título e imagen
        if (guide === "remeras") {
          title = "Guía de Remeras";
          imageSrc = "./img/talle.jpeg"; // Cambia por la ruta correcta de la imagen
        } else if (guide === "pantalones") {
          title = "Guía de Pantalones";
          imageSrc = "./img/talle2.jpg"; // Cambia por la ruta correcta de la imagen
        } else if (guide === "shorts") {
          title = "Guía de Shorts";
          imageSrc = "./img/talle3.jpg"; // Cambia por la ruta correcta de la imagen
        } else if (guide === "buzos") {
        title = "Guía de buzos";
        imageSrc = "./img/talle4.jpg"; // Cambia por la ruta correcta de la imagen
      } else if (guide === "jeans") {
        title = "Guía de jeans";
        imageSrc = "./img/talle5.jpeg"; // Cambia por la ruta correcta de la imagen
      } 

  
        // Actualizar el contenido del modal
        guideTitle.textContent = title;
        guideImage.src = imageSrc;
        
        // Mostrar el modal
        sizeGuideModal.style.display = 'flex'; // Cambiar a 'flex' para usar flexbox
      });
    });
  
    // Cerrar el modal cuando se hace clic en el botón de cierre
    closeModalBtn.addEventListener('click', function() {
      sizeGuideModal.style.display = 'none';
    });
  
    // Cerrar el modal si el usuario hace clic fuera del contenido del modal
    window.addEventListener('click', function(event) {
      if (event.target === sizeGuideModal) {
        sizeGuideModal.style.display = 'none';
      }
    });
  });
  