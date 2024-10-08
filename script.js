let cart = [];

function addToCart(product, price) {
    cart.push({ product, price });
    renderCart();
}

function renderCart() {
    const cartItems = document.getElementById('cart-items');
    cartItems.innerHTML = '';

    let total = 0;
    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.product} - $${item.price.toFixed(2)}`;
        cartItems.appendChild(li);
        total += item.price;
    });

    document.getElementById('total').textContent = `Total: $${total.toFixed(2)}`;
}
document.getElementById('contact-link').onclick = function(event) {
    event.preventDefault(); // Evita que se recargue la página
    document.getElementById('contact-form').style.display = 'flex';
};

// Función para cerrar el formulario de contacto
function closeContactForm() {
    document.getElementById('contact-form').style.display = 'none';
}
function showSuccessMessage(event) {
    event.preventDefault();  // Prevenir el envío del formulario
    
    // Crear y mostrar el mensaje de éxito
    alert('¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.');
    
    // Opcionalmente puedes vaciar los campos del formulario
    document.getElementById('form-contact').reset();

    return false;  // Prevenir el comportamiento por defecto
}
