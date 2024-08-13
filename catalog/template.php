<?php

include '../products.php';
$productId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$products = Product::getAllProducts();
$product = null;

foreach ($products as $pro) {
  if ($pro->id === $productId) {
    $product = $pro; 
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
  </head>
  <body>

  </body>
</html>