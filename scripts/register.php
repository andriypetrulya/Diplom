<?php
include "config.php";
$servername = "localhost";
$username = "root"; 
$password = "root"; 
$dbname = "vision_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = htmlspecialchars(trim($_POST["username"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $pass = htmlspecialchars(trim($_POST["password"]));

    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user, $email, $hashed_password);

    if ($stmt->execute()) {
        $message = 'Ви успішно зареєструвались, авторизуйтесь!';

        $encoded_message = urlencode($message);

        header("Location: ../login.php?message=$encoded_message");
        
    } else {
        echo "Помилка!";
    }

    $stmt->close();
}

// Закрытие соединения с базой данных
$conn->close();
?>
