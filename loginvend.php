<?php
session_start();
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

$password = md5($password."fdfdfgsdgfdgsfdg34234");

$mysql = new mysqli('localhost', 'root', 'root', 'register-bq');

$result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
$user = $result->fetch_assoc();
if(count($user) == 0) {
    $_SESSION['message'] = 'Данного пользователя не существует';
    header('Location: loginvend.php');
    exit();
}

setcookie('user', $user['email'], time() + 3600, "/");



$mysql->close();

header('Location:  prof.html');
?>
