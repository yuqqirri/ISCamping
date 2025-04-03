<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    
    // Email-адрес для отправки сообщения
    $to = "yuqqirri.commercial@gmail.com"; // Измените на ваш email
    $subject = "Новая заявка от $name"; // Тема письма
    $body = "ФИО: $name\nПочта: $email\nТелефон: $phone"; // Текст сообщения
    $headers = "From: $email"; // Указываем, откуда пришло письмо

    // Отправка письма
    if (mail($to, $subject, $body, $headers)) {
        echo "Заявка успешно отправлена!";
    } else {
        echo "Ошибка при отправке заявки.";
    }
}
?>