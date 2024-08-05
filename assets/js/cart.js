document.addEventListener('DOMContentLoaded', () => {
    const cart = [];

    document.querySelectorAll('.basket').forEach(button => {
        button.addEventListener('click', () => {
            const card = button.closest('.card');
            const id = card.dataset.id;
            const name = card.querySelector('.product-name').textContent;
            const price = parseInt(card.querySelector('.row span:last-child').textContent);

            addToCart({ id, name, price });
        });
    });

    function addToCart(product) {
        const existingProduct = cart.find(item => item.id === product.id);
        if (existingProduct) {
            existingProduct.quantity += 1;
        } else {
            cart.push({ ...product, quantity: 1 });
        }
        renderCart();
    }

    function renderCart() {
        const cartItems = document.querySelector('.cart-items');
        const total = document.querySelector('.total span');
        const cartInput = document.querySelector('.cart-input');
        cartItems.innerHTML = '';

        let totalPrice = 0;
        cart.forEach(item => {
            const itemDiv = document.createElement('div');
            itemDiv.innerHTML = `
                <p>${item.name} x ${item.quantity}</p>
                <p>${item.price * item.quantity}тг</p>
            `;
            cartItems.appendChild(itemDiv);
            totalPrice += item.price * item.quantity;
        });

        total.textContent = `${totalPrice}тг`;
        cartInput.value = JSON.stringify(cart);

        if (cart.length === 0) {
            cartItems.innerHTML = '<p>Корзина пуста</p>';
        }
    }
});
