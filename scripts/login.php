<?php
session_start();
$servername = "localhost";
$username = "root"; 
$password = "root"; 
$dbname = "vision_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Помилка підключення: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = htmlspecialchars(trim($_POST["username"]));
    $pass = htmlspecialchars(trim($_POST["password"]));

    
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row['password'])) {
    
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: ../getstart.php");
        } else {
            echo "Неправильний пароль!";
        }
    } else {
        echo "Користувач не знайдений!";
    }

   
    $stmt->close();
}


$conn->close();
?>
