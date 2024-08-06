<?php
  include '../products.php';
  $products = Product::getAllProducts();
?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <!-- <script src="lesson1.js"></script> -->
  </head>
  <body>
      <?php foreach ($products as $product): ?>
        <h1><?= $product->name ?></h1>
        <img src="<?= $product->image ?>"> 
        <p><?= $product->price ?></p>
      <?php endforeach ?>
  </body>
</html>

