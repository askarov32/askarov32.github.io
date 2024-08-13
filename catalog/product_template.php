<?php

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
    <title><?= $product->name ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/product.css">
</head>
<body class="container">
    <header>
        <a href="/index.php">Главная</a>
        <span> > <?= $product->name ?> </span>
    </header>
    <main>
        <h1><?= $product->name ?></h1>
        <section class="photos">
            <img src="../<?= $product->image ?>" alt="Картинка товара" width="200" height="200">
        </section>
        <div> 
            <p>Описание: <?= $product->description ?></p>
            <p><?= $product->details ?></p>
        </div>
        <div class="div-block">
            <p class="cost1">Стоимость: <?= $product->price ?>тг</p>
            <p class="quantity">1 шт.</p>
            <div class="button2">
                <button>-</button>
                <span>1</span>
                <button>+</button>
            </div>
            <button class="basket5" onclick="addToCart(<?= $product->id ?>)">Добавить в корзину</button>
        </div>
    </main>
    <script src="/assets/js/basket.js"></script>
</body>
</html>
