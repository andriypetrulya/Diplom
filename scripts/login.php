<?php
session_start();
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
    $pass = htmlspecialchars(trim($_POST["password"]));

    // Подготовка и выполнение запроса на выборку данных
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Проверка пароля
        if (password_verify($pass, $row['password'])) {
            // Успешная авторизация, создание сессии
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: ../getstart.php");
        } else {
            echo "Неправильный пароль!";
        }
    } else {
        echo "Пользователь не найден!";
    }

    // Закрытие подготовленного запроса
    $stmt->close();
}

// Закрытие соединения с базой данных
$conn->close();
?>
