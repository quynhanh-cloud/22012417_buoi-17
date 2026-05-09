<?php
session_start();

$correct_username = "admin";
$correct_password = "Admin@123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (empty($username) || empty($password)) {
        echo "Không được để trống tên đăng nhập hoặc mật khẩu!";
        exit();
    }

    if ($username == $correct_username && $password == $correct_password) {

        $_SESSION["username"] = $username;

        header("Location: success.php");
        exit();

    } else {

        echo "Sai tên đăng nhập hoặc mật khẩu!";
    }

} else {

    echo "Không hợp lệ!";
}
?>