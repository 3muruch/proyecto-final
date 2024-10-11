let cart = [];

// Función para agregar productos al carrito
function addToCart(product, price) {
    cart.push({ product, price });
    renderCart();
}

// Función para renderizar el carrito
function renderCart() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = ''; // Limpiar resultados previos

    let total = 0;
    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.product} - $${item.price.toFixed(2)}`;
        cartItems.appendChild(li);
        total += item.price;
    });

    document.getElementById('total').textContent = `Total: $${total.toFixed(2)}`;
}

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
    { name: "Buzo Hoodie Gris", image: "./img/buzo4.webp", price: 35 }
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
                    showProductModal(product); // Mostrar el modal con el producto
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
function showProductModal(product) {
    document.getElementById('modal-product-name').textContent = product.name;
    document.getElementById('modal-product-image').src = product.image;
    document.getElementById('modal-product-price').textContent = `Precio: $${product.price.toFixed(2)}`; // Muestra el precio
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
    const productPrice = parseFloat(document.getElementById('modal-product-price').textContent.replace('Precio: $', '')); // Obtiene el precio
    for (let i = 0; i < quantity; i++) {
        addToCart(`${productName} (${selectedSize})`, productPrice);
    }
    closeModal(); // Cierra el modal después de agregar al carrito
}
