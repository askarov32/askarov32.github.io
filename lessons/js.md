### Урок 1: Введение в JavaScript

**Цели:**
- Понять, что такое JavaScript.
- Ознакомиться с основными понятиями и синтаксисом.

**Материалы:**

#### Теория:
JavaScript - это язык программирования, который используется для создания интерактивных и динамических веб-страниц. Он позволяет добавлять анимации, обрабатывать события, взаимодействовать с сервером и многое другое. JavaScript исполняется в браузере пользователя, что позволяет мгновенно реагировать на действия пользователя.

#### Пример кода:
```javascript
console.log('Hello, World!');
```
Этот код выводит текст "Hello, World!" в консоль браузера.

#### Практика:
1. Откройте консоль браузера (F12 или Ctrl+Shift+I).
2. Введите и выполните следующий код:
```javascript
console.log('Hello, World!');
```
3. Попробуйте вывести на консоль своё имя:
```javascript
console.log('Привет, [Ваше Имя]!');
```

### Урок 2: Переменные и типы данных

**Цели:**
- Научиться объявлять переменные.
- Понять разницу между типами данных.

**Материалы:**

#### Теория:
Переменные используются для хранения данных, которые могут изменяться в процессе выполнения программы. В JavaScript переменные объявляются с помощью ключевых слов `var`, `let` и `const`.

Типы данных в JavaScript:
- `String` (строка) – для текстовых данных.
- `Number` (число) – для чисел.
- `Boolean` (логический тип) – для значений `true` или `false`.
- `Object` (объект) – для более сложных структур данных.
- `Array` (массив) – для хранения упорядоченных списков значений.

#### Пример кода:
```javascript
let name = 'John'; // строка
let age = 25; // число
let isStudent = true; // логический тип

console.log(name); // выводим значение переменной name
console.log(age); // выводим значение переменной age
console.log(isStudent); // выводим значение переменной isStudent
```

#### Практика:
1. Объявите переменные для хранения вашего имени, возраста и статуса студента.
2. Выведите значения этих переменных в консоль.
```javascript
let myName = 'Ваше Имя';
let myAge = Ваш возраст;
let isStudent = true; // или false, если вы не студент

console.log(myName);
console.log(myAge);
console.log(isStudent);
```

### Урок 3: Основные операторы и выражения

**Цели:**
- Ознакомиться с основными операторами.
- Научиться выполнять арифметические и логические операции.

**Материалы:**

#### Теория:
JavaScript поддерживает различные операторы для выполнения операций над данными:
- Арифметические операторы: `+`, `-`, `*`, `/`, `%`.
- Операторы сравнения: `==`, `!=`, `===`, `!==`, `<`, `>`, `<=`, `>=`.
- Логические операторы: `&&`, `||`, `!`.

#### Пример кода:
```javascript
let a = 10;
let b = 20;
let sum = a + b; // сложение
let isEqual = (a === b); // строгое равенство
let isLess = (a < b); // меньше

console.log(sum); // 30
console.log(isEqual); // false
console.log(isLess); // true
```

#### Практика:
1. Объявите две переменные и присвойте им числовые значения.
2. Выполните различные арифметические операции и выведите результаты в консоль.
3. Выполните сравнение этих переменных и выведите результаты в консоль.

```javascript
let x = 15;
let y = 5;

let addition = x + y;
let subtraction = x - y;
let multiplication = x * y;
let division = x / y;
let remainder = x % y;

console.log(addition); // 20
console.log(subtraction); // 10
console.log(multiplication); // 75
console.log(division); // 3
console.log(remainder); // 0

let isGreater = x > y;
let isLessOrEqual = x <= y;

console.log(isGreater); // true
console.log(isLessOrEqual); // false
```

### Урок 4: Управляющие конструкции

**Цели:**
- Научиться использовать условия и циклы.

**Материалы:**

#### Теория:
Управляющие конструкции позволяют изменять ход выполнения программы в зависимости от условий.

- Условные операторы: `if`, `else if`, `else`, `switch`.
- Циклы: `for`, `while`, `do...while`.

#### Пример кода:
```javascript
let score = 85;

if (score >= 90) {
    console.log('Отлично');
} else if (score >= 75) {
    console.log('Хорошо');
} else {
    console.log('Удовлетворительно');
}

for (let i = 0; i < 5; i++) {
    console.log(i); // 0, 1, 2, 3, 4
}

let counter = 0;
while (counter < 5) {
    console.log(counter); // 0, 1, 2, 3, 4
    counter++;
}
```

#### Практика:
1. Напишите условие, которое проверяет возраст и выводит сообщение в зависимости от того, является ли человек совершеннолетним.
2. Напишите цикл, который выводит числа от 1 до 10.

```javascript
let age = 20;

if (age >= 18) {
    console.log('Вы совершеннолетний');
} else {
    console.log('Вы несовершеннолетний');
}

for (let i = 1; i <= 10; i++) {
    console.log(i);
}
```

### Урок 5: Функции

**Цели:**
- Научиться создавать и использовать функции.

**Материалы:**

#### Теория:
Функции позволяют группировать код в блоки, которые можно многократно использовать. Функции объявляются с помощью ключевого слова `function`.

#### Пример кода:
```javascript
function greet(name) {
    return 'Привет, ' + name + '!';
}

console.log(greet('John')); // Привет, John!
```

#### Практика:
1. Напишите функцию, которая принимает два числа и возвращает их сумму.
2. Вызовите эту функцию с различными аргументами и выведите результаты в консоль.

```javascript
function add(a, b) {
    return a + b;
}

console.log(add(5, 10)); // 15
console.log(add(20, 30)); // 50
```

### Урок 6: Работа с DOM

**Цели:**
- Научиться взаимодействовать с элементами веб-страницы.

**Материалы:**

#### Теория:
DOM (Document Object Model) представляет собой программный интерфейс для HTML и XML документов. Он позволяет JavaScript получать доступ к элементам страницы и изменять их.

#### Пример кода:
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="title">Hello, World!</h1>
    <button id="changeTextButton">Change Text</button>

    <script>
        const button = document.getElementById('changeTextButton');
        const title = document.getElementById('title');

        button.addEventListener('click', () => {
            title.textContent = 'Text Changed!';
        });
    </script>
</body>
</html>
```

#### Практика:
1. Создайте HTML страницу с заголовком и кнопкой.
2. Напишите JavaScript код, который будет изменять текст заголовка при нажатии на кнопку.

### Урок 7: События

**Цели:**
- Научиться обрабатывать события на веб-странице.

**Материалы:**

#### Теория:
События позволяют JavaScript реагировать на действия пользователя, такие как клики, ввод текста, наведение мыши и т.д. Обработчики событий назначаются с помощью метода `addEventListener`.

#### Пример кода:
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" id="inputField" placeholder="Введите текст">
    <p id="outputText">Вывод текста здесь</p>

    <script>
        const inputField = document.getElementById('inputField');
        const outputText = document.getElementById('outputText');

        inputField.addEventListener('input', () => {
            outputText.textContent = input

Field.value;
        });
    </script>
</body>
</html>
```

#### Практика:
1. Создайте HTML страницу с полем ввода текста и параграфом.
2. Напишите JavaScript код, который будет выводить введенный текст в параграф в реальном времени.

### Урок 8: Работа с массивами и объектами

**Цели:**
- Научиться работать с массивами и объектами в JavaScript.

**Материалы:**

#### Теория:
Массивы используются для хранения упорядоченных коллекций данных. Объекты используются для хранения коллекций данных с именованными свойствами.

#### Пример кода:
```javascript
const fruits = ['Apple', 'Banana', 'Cherry'];
console.log(fruits[0]); // Apple

const person = {
    name: 'John',
    age: 30,
    isStudent: false
};
console.log(person.name); // John
```

#### Практика:
1. Создайте массив с несколькими элементами и выведите первый элемент в консоль.
2. Создайте объект с несколькими свойствами и выведите одно из свойств в консоль.

```javascript
const animals = ['Cat', 'Dog', 'Elephant'];
console.log(animals[0]); // Cat

const car = {
    brand: 'Toyota',
    model: 'Camry',
    year: 2020
};
console.log(car.brand); // Toyota
```

### Урок 9: Проект: Корзина покупок

**Цели:**
- Применить знания, полученные на предыдущих уроках.
- Написать код для управления корзиной покупок.

**Материалы:**

#### Теория:
На этом этапе учащиеся должны уметь:
- Взаимодействовать с элементами DOM.
- Обрабатывать события.
- Работать с массивами и объектами.

#### Пример кода:
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <div class="card" data-id="1">
        <p class="product-name">Product 1</p>
        <p class="row"><span>Price: </span><span>100</span></p>
        <button class="basket">Add to Cart</button>
    </div>
    <div class="card" data-id="2">
        <p class="product-name">Product 2</p>
        <p class="row"><span>Price: </span><span>200</span></p>
        <button class="basket">Add to Cart</button>
    </div>

    <div class="cart">
        <h2>Shopping Cart</h2>
        <div class="cart-items"></div>
        <p class="total">Total: <span>0</span>тг</p>
        <input type="hidden" class="cart-input" name="cart">
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cart = [];

            document.querySelectorAll('.basket').forEach(button => {
                button.addEventListener('click', () => {
                    const card = button.closest('.card');
                    const id = card.dataset.id;
                    const name = card.querySelector('.product-name').textContent;
                    const price = parseInt(card.querySelector('.row span:last-child').textContent);

                    addToCart({ id, name, price });
                });
            });

            function addToCart(product) {
                const existingProduct = cart.find(item => item.id === product.id);
                if (existingProduct) {
                    existingProduct.quantity += 1;
                } else {
                    cart.push({ ...product, quantity: 1 });
                }
                renderCart();
            }

            function renderCart() {
                const cartItems = document.querySelector('.cart-items');
                const total = document.querySelector('.total span');
                const cartInput = document.querySelector('.cart-input');
                cartItems.innerHTML = '';

                let totalPrice = 0;
                cart.forEach(item => {
                    const itemDiv = document.createElement('div');
                    itemDiv.innerHTML = `
                        <p>${item.name} x ${item.quantity}</p>
                        <p>${item.price * item.quantity}тг</p>
                    `;
                    cartItems.appendChild(itemDiv);
                    totalPrice += item.price * item.quantity;
                });

                total.textContent = `${totalPrice}тг`;
                cartInput.value = JSON.stringify(cart);

                if (cart.length === 0) {
                    cartItems.innerHTML = '<p>Корзина пуста</p>';
                }
            }
        });
    </script>
</body>
</html>
```

#### Практика:
1. Создайте HTML страницу с карточками продуктов и кнопками "Добавить в корзину".
2. Напишите JavaScript код, который будет добавлять товары в корзину, обновлять количество и отображать общую стоимость.

Этот курс даст вашим ученикам все необходимые знания и навыки, чтобы они смогли написать подобный код для управления корзиной покупок.