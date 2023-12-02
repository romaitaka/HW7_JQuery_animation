<?php
// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных с формы:
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    // Параметры для функции mail:
    $source = getenv('HTTP_REFERER');
    $subject = 'Тема письма клиенту';
    $message = "Текст письма:
        <br><br>
        Имя: $name<br>
        E-mail: $email<br>
        Телефон: $phone<br>
        Источник (ссылка): $source
    ";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-type: text/html; charset=utf-8\r\n";

    // Отправка данных на почту:
    $success = mail("trade.interes@gmail.com", $subject, $message, $headers);

    // Проверка успешности отправки
    if ($success) {
        echo "Письмо успешно отправлено.";
    } else {
        echo "Произошла ошибка при отправке письма.";
    }

    // Сохранение инфо о лидах в файл leads.xls:
    $date = date("d.m.y"); // число.месяц.год
    $time = date("H:i"); // часы:минуты:секунды

    $f = fopen("leads.xls", "a+");
    fwrite($f, " <tr>");
    fwrite($f, " <td>$email</td> <td>$name</td> <td>$phone</td>");
    fwrite($f, " <td>$source</td>");
    fwrite($f, " </tr>");
    fwrite($f, "\n ");
    fclose($f);
} else {
    echo "Форма не была отправлена.";
}
?>