<?php

session_start();

// Ответ формируем как HTML, чтобы текущий frontend (jQuery .html()) его отобразил
header('Content-Type: text/html; charset=utf-8');

/**
 * Возвращает унифицированный HTML-ответ и завершает выполнение скрипта.
 */
function respond(int $code, string $html): void
{
    http_response_code($code);
    echo $html;
    exit;
}

// 1. Принимаем только POST-запросы
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(405, '<h3 style="color: red;">Метод запроса не поддерживается.</h3>');
}

// 2. Проверка CSRF-токена (защита от подделки запросов с чужих сайтов)
if (
    empty($_SESSION['csrf_token'])
    || empty($_POST['csrf_token'])
    || !hash_equals($_SESSION['csrf_token'], (string)$_POST['csrf_token'])
) {
    respond(403, '<h3 style="color: red;">Неверный токен безопасности. Обновите страницу и попробуйте снова.</h3>');
}

// 3. Honeypot-поле: скрытое поле, которое заполняют только боты.
//    Если оно заполнено — молча «принимаем» заявку, ничего не отправляя.
if (!empty($_POST['website'])) {
    respond(200, '<h3 style="color: green;">Сообщение успешно отправлено!</h3>');
}

// 4. Простое ограничение частоты отправки (защита от спама), привязка к сессии
$minInterval = 5; // секунд между заявками
if (isset($_SESSION['last_submit']) && (time() - (int)$_SESSION['last_submit']) < $minInterval) {
    respond(429, '<h3 style="color: red;">Слишком много запросов. Подождите пару секунд и попробуйте снова.</h3>');
}

// 5. Валидация и очистка входных данных
$name     = trim((string)($_POST['name'] ?? ''));
$contacts = trim((string)($_POST['contacts'] ?? ''));

// Ограничиваем длину, чтобы предотвратить злоупотребление и header injection
$name     = mb_substr($name, 0, 100);
$contacts = mb_substr($contacts, 0, 100);

if ($name === '' || $contacts === '') {
    respond(200, '<h3 style="color: red;">Заполните имя и телефон!</h3>');
}

// Санитизация для тела письма (защита от CRLF-инъекций)
$safeName     = str_replace(["\r", "\n"], '', $name);
$safeContacts = str_replace(["\r", "\n"], '', $contacts);

$message  = "Имя: " . htmlspecialchars($safeName, ENT_QUOTES, 'UTF-8') . "<br/>\r\n";
$message .= "Телефон: " . htmlspecialchars($safeContacts, ENT_QUOTES, 'UTF-8') . "<br/>\r\n";
$message .= "IP отправителя: " . htmlspecialchars((string)($_SERVER['REMOTE_ADDR'] ?? ''), ENT_QUOTES, 'UTF-8') . "<br/>\r\n";

// 6. Отправка письма
$mail_to  = "all-coolers@yandex.ru";            // почта, на которую придёт письмо
$subject  = "Заявка с сайта aquaborn.ru";        // тема письма
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";   // кодировка письма
$headers .= "From: Питьевая вода AquaBorn <no-reply@aquaborn.ru>\r\n"; // от кого письмо

$sent = mail($mail_to, $subject, $message, $headers);

// Фиксируем время последней успешной попытки (для rate limiting)
$_SESSION['last_submit'] = time();

if ($sent) {
    respond(200, '<h3 style="color: green;">Сообщение успешно отправлено!</h3>');
}

error_log('mail() failed to send inquiry from ' . ($_SERVER['REMOTE_ADDR'] ?? 'unknown'));
respond(500, '<h3 style="color: red;">Не удалось отправить сообщение. Попробуйте позже.</h3>');