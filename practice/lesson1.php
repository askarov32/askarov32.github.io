<?php
include '../products.php';

$products = Product::getAllProducts();

$number = 90;

// if ($number > 100) {
//   echo "number больше ста";
// } elseif ($number > 10) {
//   echo "number больше 10";
// } else { 
//   echo "false";
// }

// echo "<br>";

for ($i = 0; $i < 5; $i++) {
  echo "Hello\n";
}

foreach ($products as $product) {
  $name = $product->name;
  echo $name;
}



