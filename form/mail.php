<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $to = "your-email@example.com"; // Замените на ваш электронный адрес
    $subject = "Новая заявка на бронирование стола";
    $body = "Имя: $name\nEmail: $email\nТелефон: $phone";

    $headers = "From: webmaster@example.com"; // Замените на подходящий адрес отправителя

    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение отправлено!";
    } else {
        echo "Ошибка при отправке сообщения!";
    }
}
?>