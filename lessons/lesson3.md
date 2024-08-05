### Урок 3: Создание динамического списка товаров

#### Теория 3.1: Создание массива товаров

Мы научимся создавать массив товаров и выводить их на страницу с использованием PHP.

- **Массивы**: используются для хранения нескольких значений в одной переменной.

```php
<?php
$products = [
    ["name" => "Laptop", "price" => 1200],
    ["name" => "Mouse", "price" => 25],
    ["name" => "Keyboard", "price" => 45]
];

foreach ($products as $product) {
    echo "Product: " . $product["name"] . ", Price: " . $product["price"] . "<br>";
}
?>
```

#### Практика 3.2: Вывод списка товаров на странице

1. Создайте новый файл `products.php`.
2. Напишите в нем следующий код:
   ```php
   <?php
   $products = [
       ["name" => "Laptop", "price" => 1200],
       ["name" => "Mouse", "price" => 25],
       ["name" => "Keyboard", "price" => 45]
   ];
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
                   <?php echo "Product: " . $product["name"] . ", Price: " . $product["price"]; ?>
               </li>
           <?php endforeach; ?>
       </ul>
   </body>
   </html>
   ```
3. Запустите файл `products.php` через встроенный сервер PHP и откройте его в браузере.