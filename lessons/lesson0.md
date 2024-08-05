### Урок 0: Основы PHP

#### Теория 0.1: Типы данных и операторы в PHP

В этом уроке мы изучим основные типы данных и операторы, используемые в PHP.

##### Типы данных

PHP поддерживает несколько основных типов данных:

- **Целые числа (integers)**: положительные или отрицательные числа без дробной части.
- **Вещественные числа (floats)**: числа с дробной частью.
- **Строки (strings)**: последовательности символов.
- **Логические значения (booleans)**: `true` или `false`.
- **Массивы (arrays)**: упорядоченные коллекции значений.
- **Объекты (objects)**: экземпляры классов.
- **NULL**: специальное значение, означающее отсутствие значения.

##### Примеры

```php
<?php
// Целое число
$integer = 10;

// Вещественное число
$float = 10.5;

// Строка
$string = "Hello, World!";

// Логическое значение
$boolean = true;

// Массив
$array = array(1, 2, 3, "hello");

// Объект
class Car {
    public $color;
    public function __construct($color) {
        $this->color = $color;
    }
}

$myCar = new Car("red");

// NULL
$nullVar = NULL;
?>
```

##### Операторы

PHP поддерживает несколько типов операторов:

- **Арифметические операторы**: `+`, `-`, `*`, `/`, `%`.
- **Операторы сравнения**: `==`, `===`, `!=`, `!==`, `>`, `<`, `>=`, `<=`.
- **Логические операторы**: `&&`, `||`, `!`.

##### Примеры

```php
<?php
$a = 10;
$b = 20;

// Арифметические операторы
$sum = $a + $b;        // 30
$difference = $a - $b; // -10
$product = $a * $b;    // 200
$quotient = $a / $b;   // 0.5
$remainder = $a % $b;  // 10

// Операторы сравнения
$isEqual = ($a == $b);       // false
$isIdentical = ($a === $b);  // false
$isNotEqual = ($a != $b);    // true
$isNotIdentical = ($a !== $b); // true
$isGreaterThan = ($a > $b);  // false
$isLessThan = ($a < $b);     // true

// Логические операторы
$and = ($a > 5 && $b < 30); // true
$or = ($a > 15 || $b < 25); // true
$not = !($a > 15);          // true
?>
```

#### Практика 0.2: Применение типов данных и операторов

1. Создайте новый файл `basics.php`.
2. Напишите в нем следующий код:
   ```php
   <?php
   // Типы данных
   $integer = 10;
   $float = 10.5;
   $string = "Hello, World!";
   $boolean = true;
   $array = array(1, 2, 3, "hello");
   $nullVar = NULL;

   // Операторы
   $a = 10;
   $b = 20;
   $sum = $a + $b;
   $isEqual = ($a == $b);
   $and = ($a > 5 && $b < 30);

   // Вывод значений
   echo "Целое число: $integer\n";
   echo "Вещественное число: $float\n";
   echo "Строка: $string\n";
   echo "Логическое значение: " . ($boolean ? 'true' : 'false') . "\n";
   echo "Массив: ";
   print_r($array);
   echo "NULL значение: " . ($nullVar === NULL ? 'NULL' : 'not NULL') . "\n";
   echo "Сумма: $sum\n";
   echo "Равно ли a и b: " . ($isEqual ? 'true' : 'false') . "\n";
   echo "Логическое И: " . ($and ? 'true' : 'false') . "\n";
   ?>
   ```
3. Запустите файл `basics.php` через встроенный сервер PHP:
   ```sh
   php -S localhost:8000
   ```
4. Откройте браузер и перейдите по адресу `http://localhost:8000/basics.php`.

