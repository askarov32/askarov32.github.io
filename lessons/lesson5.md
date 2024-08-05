### Урок 5: Создание шаблона для страницы товара

#### Теория 5.1: Шаблоны в PHP

Мы узнаем, как создавать шаблоны в PHP для отображения данных на страницах.

```php
<?php
$product = new Product("Laptop", 1200);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $product->name; ?></title>
</head>
<body>
    <h1><?php echo $product->name; ?></h1>
    <p>Price: <?php echo $product->price; ?></p>
</body>
</html>
```

#### Практика 5.2: Создание шаблона для страницы товара

1. Создайте новый файл `product_template.php` в папке `catalog`.
2. Напишите в нем следующий код:
   ```php
   <?php
   include '../Product.php';

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
       <title><?php echo $product->name; ?></title>
       <link rel="

stylesheet" href="/assets/css/style.css">
   </head>
   <body>
       <h1><?php echo $product->name; ?></h1>
       <p>Price: <?php echo $product->price; ?></p>
   </body>
   </html>
   ```
3. Обновите файл `index.php`, чтобы ссылки на товары вели к шаблону `product_template.php`:
   ```php
   <?php
   include 'Product.php';

   $products = Product::getAllProducts();
   ?>
   <!DOCTYPE html>
   <html>
   <head>
       <title>Products</title>
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
   </body>
   </html>
   ```
4. Запустите файл `index.php` через встроенный сервер PHP и откройте его в браузере. Теперь вы можете кликать на товары и переходить к их страницам.