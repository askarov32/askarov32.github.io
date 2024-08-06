### Введение

В этом курсе мы создадим простой веб-сайт, который будет отображать товары, позволять пользователям добавлять их в корзину и отправлять заказы на почту. Мы будем использовать PHP для создания динамического бэкенда и JavaScript для управления корзиной на фронтенде.

### Шаг 1: Подготовка окружения

Прежде чем начать, убедитесь, что у вас установлены следующие инструменты:
- PHP
- Composer (менеджер пакетов для PHP)
- Веб-браузер

#### Установка PHP и Composer

1. Перейдите на [официальный сайт PHP](https://www.php.net/downloads) и скачайте последнюю версию PHP.
2. Следуйте инструкциям на сайте для установки PHP на ваш компьютер.
3. Перейдите на [официальный сайт Composer](https://getcomposer.org/) и скачайте установочный файл для Composer.
4. Запустите установочный файл и следуйте инструкциям на экране для установки Composer.

### Шаг 2: Создание проекта

Создайте новую папку для вашего проекта и откройте ее в текстовом редакторе. Мы будем использовать Visual Studio Code (VS Code), но вы можете использовать любой редактор по вашему выбору.

#### Структура проекта

Создайте следующую структуру папок и файлов:

```
MY_PROJECT/
│
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── img/
│   │   └── logo.jpeg
│   └── js/
│       └── cart.js
├── catalog/
│   └── product_template.php
├── index.php
├── order.php
├── products.php
└── README.md
```

### Шаг 3: Создание бэкенда на PHP

#### Модель товара

Создайте файл `products.php` и добавьте в него следующую модель товара:

```php
<?php
class Product {
    public $id;
    public $name;
    public $price;
    public $image;
    public $description;
    public $details;

    public function __construct($id, $name, $price, $image, $description, $details) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->description = $description;
        $this->details = $details;
    }

    public static function getAllProducts() {
        return [
            new Product(1, 'Adidas Daily 3.0', 48990, 'assets/img/logo.jpeg', 'Описание товара', 'Детали товара'),
            new Product(2, 'Adidas Campus', 74990, 'assets/img/logo.jpeg', 'Описание товара', 'Детали товара'),
            new Product(3, 'Adidas Stellasport Yvori', 46990, 'assets/img/logo.jpeg', 'Описание товара', 'Детали товара'),
            // Добавьте остальные продукты
        ];
    }
}
?>
```

### Шаг 4: Создание главной страницы

Создайте файл `index.php` и добавьте следующий код для отображения списка товаров:

```php
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'products.php';

$products = Product::getAllProducts();
?>
<!DOCTYPE html>
<html>
<head>
    <title>My project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/cart.js" defer></script>
</head>
<body>
    <main class="main">
        <section class="motto">
            <img src="assets/img/logo.jpeg" alt="Логотип">
            <h1>Доставка fedsneakers</h1>
            <p>Оперативно и недорого</p>
        </section>
        <div class="all-content">
            <section class="products">
                <h2>Товары</h2>
                <?php foreach ($products as $product): ?>
                    <div class="card" data-id="<?= $product->id ?>">
                        <img src="<?= $product->image ?>" alt="<?= $product->name ?>" width="200" height="200">
                        <a href="./catalog/product_template.php?id=<?= $product->id ?>"><h3 class="product-name"><?= $product->name ?></h3></a>
                        <p class="product-number">1 шт.</p>
                        <div class="row">
                            <div class="buttons">
                                <button>-</button>
                                <span>1</span>
                                <button>+</button>
                            </div>
                            <span><?= $product->price ?>тг</span>
                        </div>
                        <button class="basket">Добавить в корзину</button>
                    </div>
                <?php endforeach; ?>
            </section>
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
        </div>
    </main>
    <footer></footer>
</body>
</html>
```

### Шаг 5: Создание шаблона для страницы товара

Создайте файл `catalog/product_template.php` и добавьте в него следующий код для отображения деталей товара:

```php
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../products.php';

$productId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$products = Product::getAllProducts();
$product = null;

foreach ($products as $p) {
    if ($p->id === $productId) {
        $product = $p;
        break;
    }
}

if (!$product) {
    header('Location: /index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($product->name) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/product.css">
</head>
<body class="container">
    <header>
        <a href="/index.php">Главная</a>
        <span> > <?= htmlspecialchars($product->name) ?> </span>
    </header>
    <main>
        <h1><?= htmlspecialchars($product->name) ?></h1>
        <section class="photos">
            <img src="../<?= htmlspecialchars($product->image) ?>" alt="Картинка товара" width="200" height="200">
            <!-- Добавьте дополнительные изображения товара, если есть -->
        </section>
        <div>
            <p>О модели: <?= htmlspecialchars($product->description) ?></p>
            <p><?= htmlspecialchars($product->details) ?></p>
        </div>
        <div class="div-block">
            <p class="cost1">Стоимость: <?= htmlspecialchars($product->price) ?>тг</p>
            <p class="quantity">1 шт.</p>
            <div class="button2">
                <button>-</button>
                <span>1</span>
                <button>+</button>
            </div>
            <button class="basket5" onclick="addToCart(<?= $product->id ?>)">Добавить в корзину</button>
        </div>
    </main>
    <script src="/assets/js/cart.js"></script>
</body>
</html>
```

### Шаг 6: Создание функциональности корзины на JavaScript

Создайте файл

 `assets/js/cart.js` и добавьте в него следующий код для управления корзиной:

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

### Шаг 7: Установка и использование PHPMailer для отправки заказов

1. **Установите PHPMailer**:

   Откройте командную строку и перейдите в директорию вашего проекта. Затем установите PHPMailer с помощью Composer:

   ```sh
   composer require phpmailer/phpmailer
   ```

2. **Создайте файл `order.php` для обработки заказов и отправки писем**:

#### Содержимое файла `order.php`

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

### Заключение

Теперь у вас есть полностью функциональный веб-сайт, который отображает товары, позволяет пользователям добавлять их в корзину и отправлять заказы на электронную почту. Этот курс показал вам основные шаги по созданию динамического веб-сайта с использованием PHP для бэкенда и JavaScript для фронтенда.