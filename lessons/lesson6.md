### Урок 6: Управление корзиной на JavaScript

#### Теория 6.1: Основы JavaScript для управления корзиной

Мы узнаем, как использовать JavaScript для управления корзиной на клиентской стороне.

```javascript
document.addEventListener('DOMContentLoaded', () => {
    const cart = [];

    function addToCart(product) {
        cart.push(product);
        console.log(cart);
    }

    const button = document.querySelector('button');
    button.addEventListener('click', () => {
        const product = { name: "Laptop", price: 1200 };
        addToCart(product);
    });
});
```

#### Практика 6.2: Создание функциональности корзины

1. Создайте новый файл `assets/js/cart.js`.
2. Напишите в нем следующий код:
   ```javascript
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
   ```
3. Обновите файл `index.php`, чтобы подключить `cart.js`:
   ```php
   <?php
   include 'Product.php';

   $products = Product::getAllProducts();
   ?>
   <!DOCTYPE html>
   <html>
   <head>
       <title>Products</title>
       <link rel="stylesheet" href="/assets/css/style.css">
       <script src="/assets/js/cart.js" defer></script>
   </head>
   <body>
       <h1>Products</h1>
       <ul>
           <?php foreach ($products as $product): ?>
               <li>
                   <a href="catalog/product_template.php?id=<?php echo $product->id; ?>">
                       <?php echo "Product: " . $product->name . ", Price: " . $product->price; ?>
                   </a>
               </li>
           <?php endforeach; ?>
       </ul>
       <div class="basket-block">
           <p class="offer">Ваш заказ</p>
           <div class="cart-items"></div>
           <p class="delievery">Доставка: бесплатно</p>
           <p class="total">Итого: <span>0тг</span></p>
           <form action="order.php" method="POST">
               <legend class="get-order">Оформить заказ</legend>
               <input type="hidden" name="cart" class="cart-input">
               <input type="Phone" name="phone" placeholder="Ваш номер телефона" class="phone-number" required>
               <button type="submit" class="get">Заказать</button>
           </form>
       </div>
   </body>
   </html>
   ```
4. Запустите файл `index.php` через встроенный сервер PHP и откройте его в браузере. Теперь вы можете добавлять товары в корзину и видеть их в списке.
