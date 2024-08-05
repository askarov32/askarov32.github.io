<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cart = isset($_POST['cart']) ? json_decode($_POST['cart'], true) : [];
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';

    if (empty($cart)) {
        echo 'Корзина пуста';
        exit;
    }

    $subject = 'Новый заказ';
    $message = '<h1>Ваш заказ</h1>';
    $message .= '<p>Телефон: ' . htmlspecialchars($phone) . '</p>';
    $message .= '<h2>Товары:</h2>';
    $message .= '<ul>';
    foreach ($cart as $item) {
        $message .= '<li>' . htmlspecialchars($item['name']) . ' - ' . htmlspecialchars($item['quantity']) . ' шт. - ' . htmlspecialchars($item['price']) . 'тг</li>';
    }
    $message .= '</ul>';
    $message .= '<p>Итого: ' . array_reduce($cart, function($total, $item) {
        return $total + $item['price'] * $item['quantity'];
    }, 0) . 'тг</p>';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <webmaster@example.com>' . "\r\n";

    if (mail('insar@lessons.kz', $subject, $message, $headers)) {
        echo 'Заказ успешно отправлен';
    } else {
        echo 'Ошибка при отправке заказа';
    }
}
?>
