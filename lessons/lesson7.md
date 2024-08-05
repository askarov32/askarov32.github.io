### Урок 7: Отправка заказов по электронной почте

#### Теория 7.1: Использование PHPMailer для отправки писем

Мы узнаем, как использовать библиотеку PHPMailer для отправки писем с помощью PHP.

1. **PHPMailer**: это библиотека для отправки писем через SMTP.

#### Практика 7.2: Установка и использование PHPMailer

1. Установите PHPMailer с помощью Composer:
   ```sh
   composer require phpmailer/phpmailer
   ```
2. Создайте файл `order.php` для обработки заказов и отправки писем:
   ```php
   <?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require 'vendor/autoload.php';

   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $cart = isset($_POST['cart']) ? json_decode($_POST['cart'], true) : [];
       $phone = isset($_POST['phone']) ? $_POST['phone'] : '';

       if (empty($cart)) {
           echo 'Корзина пуста';
           exit;
       }

       $subject = 'Новый заказ';
       $message = '<h1>Ваш заказ</h1>';
       $message .= '<p>Телефон: ' . htmlspecialchars($phone) . '</p>';
       $message .= '<h2>Товары:</h2>';
       $message .= '<ul>';
       foreach ($cart as $item) {
           $message .= '<li>' . htmlspecialchars($item['name']) . ' - ' . htmlspecialchars($item['quantity']) . ' шт. - ' . htmlspecialchars($item['price']) . 'тг</li>';
       }
       $message .= '</ul>';
       $message .= '<p>Итого: ' . array_reduce($cart, function($total, $item) {
           return $total + $item['price'] * $item['quantity'];
       }, 0) . 'тг</p>';

       $mail = new PHPMailer(true);
       try {
           // Настройки сервера
           $mail->isSMTP();
           $mail->Host = 'smtp.sendgrid.net';  // Укажите SMTP сервер SendGrid
           $mail->SMTPAuth = true;
           $mail->Username = 'apikey';  // Используйте 'apikey' как имя пользователя
           $mail->Password = 'YOUR_SENDGRID_API_KEY';  // Используйте ваш API ключ
           $mail->SMTPSecure = 'tls';
           $mail->Port = 587;

           // Получатель
           $mail->setFrom('webmaster@example.com', 'Webmaster');
           $mail->addAddress('recipient@example.com');  // Укажите получателя

           // Содержимое письма
           $mail->isHTML(true);
           $mail->Subject = $subject;
           $mail->Body    = $message;

           $mail->send();
           echo 'Заказ успешно отправлен';
       } catch (Exception $e) {
           echo 'Ошибка при отправке заказа: ', $mail->ErrorInfo;
       }
   }
   ?>
   ```
3. Обновите файл `index.php`, чтобы форма отправляла данные в `order.php`:
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
                   <a href="catalog/product_template

.php?id=<?php echo $product->id; ?>">
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
4. Запустите файл `index.php` через встроенный сервер PHP и откройте его в браузере. Теперь вы можете добавлять товары в корзину и отправлять заказы по электронной почте.

### Заключение

Мы завершили наш курс по созданию простого веб-сайта с использованием PHP и JavaScript. Вы узнали основы PHP, как создавать классы и объекты, как динамически отображать данные на странице, как использовать JavaScript для управления корзиной и как отправлять заказы по электронной почте с использованием PHPMailer. С этими знаниями вы можете продолжить изучение веб-разработки и создавать более сложные и функциональные веб-приложения.