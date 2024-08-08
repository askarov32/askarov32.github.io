<?php
  include '../products.php';
  $products = Product::getAllProducts();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="lesson1.js" defer></script>
</head>
<body>
    <?php foreach ($products as $product): ?>
        <h1><?= $product->name ?></h1>
        <img style="width: 300px; height: 280px" src="<?= $product->image ?>">
        <p><?= $product->price ?></p>

        <div class="buttons">
            <button class="decrement_button">-</button>
            <span class="amount">1</span>
            <button class="increment_button">+</button>
        </div>
    <?php endforeach ?>
</body>
</html>
