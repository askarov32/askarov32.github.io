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
            <!-- Добавь дополнительные изображения товара, если есть -->
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
