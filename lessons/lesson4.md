### Урок 4: Интеграция объекта `Product` и динамического списка товаров

#### Теория 4.1: Использование классов для моделирования товаров

Мы объединим знания о классах и массивах для создания модели товаров.

```php
<?php
class Product {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public static function getAllProducts() {
        return [
            new Product("Laptop", 1200),
            new Product("Mouse", 25),
            new Product("Keyboard", 45)
        ];
    }
}

$products = Product::getAllProducts();

foreach ($products as $product) {
    $product->display();
}
?>
```

#### Практика 4.2: Создание динамического списка товаров с использованием класса `Product`

1. Обновите файл `Product.php`, добавив метод `getAllProducts`:
   ```php
   <?php
   class Product {
       public $name;
       public $price;

       public function __construct($name, $price) {
           $this->name = $name;
           $this->price = $price;
       }

       public function display() {
           echo "Product: $this->name, Price: $this->price";
       }

       public static function getAllProducts() {
           return [
               new Product("Laptop", 1200),
               new Product("Mouse", 25),
               new Product("Keyboard", 45)
           ];
       }
   }
   ?>
   ```
2. Создайте новый файл `index.php` и добавьте в него следующий код для отображения списка товаров:
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
                   <?php echo "Product: " . $product->name . ", Price: " . $product->price; ?>
               </li>
           <?php endforeach; ?>
       </ul>
   </body>
   </html>
   ```
3. Запустите файл `index.php` через встроенный сервер PHP и откройте его в браузере.