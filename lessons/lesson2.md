### Урок 2: Объектно-ориентированное программирование (ООП) в PHP

#### Теория 2.1: Классы и объекты

Мы узнаем, что такое классы и объекты в PHP, и как использовать ООП для создания моделей данных.

- **Классы**: шаблоны для создания объектов.
- **Объекты**: экземпляры классов.

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
}

$product = new Product("Laptop", 1200);
$product->display();
?>
```

#### Практика 2.2: Создание класса `Product`

1. Создайте новый файл `Product.php`.
2. Напишите в нем следующий код:
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
   }
   ?>
   ```
3. Создайте еще один файл `test_product.php` и напишите в нем следующий код для тестирования класса `Product`:
   ```php
   <?php
   include 'Product.php';

   $product = new Product("Laptop", 1200);
   $product->display();
   ?>
   ```
4. Запустите файл `test_product.php` через встроенный сервер PHP и откройте его в браузере.
