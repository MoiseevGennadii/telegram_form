<?php

$botToken = 'you_bot_token'; 

$chatId = '-you_chat_id';

// Получение данных из формы
$name = $_POST['name'];
$email = $_POST['tel'];
$message = $_POST['message'];

// Формирование сообщения
$text = "Имя: $name\ntel: $email\nСообщение: $message";

$telegramUrl = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($text);
$response = file_get_contents($telegramUrl);

// Проверка успешности отправки
if ($response === false) {
    echo 'Ошибка при отправке сообщения в Telegram';
} else {
    echo 'Сообщение успешно отправлено в Telegram';
}
