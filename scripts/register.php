<?php
include "config.php";
// Подключение к базе данных
$servername = "localhost";
$username = "root"; // замените на ваше имя пользователя БД
$password = "root"; // замените на ваш пароль БД
$dbname = "vision_db"; // замените на ваше имя базы данных

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Проверка, был ли отправлен запрос POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение и проверка данных формы
    $user = htmlspecialchars(trim($_POST["username"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $pass = htmlspecialchars(trim($_POST["password"]));

    // Хеширование пароля
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Подготовка и выполнение запроса на вставку данных
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user, $email, $hashed_password);

    if ($stmt->execute()) {
        // Установка значения переменной
        $message = 'Ви успішно зареєструвались, авторизуйтесь!';

        // Кодирование параметра для использования в URL
        $encoded_message = urlencode($message);

        // Выполнение переадресации с передачей параметра
        header("Location: ../login.php?message=$encoded_message");
        
    } else {
        echo "Ошибка!";
    }

    // Закрытие подготовленного запроса
    $stmt->close();
}

// Закрытие соединения с базой данных
$conn->close();
?>
