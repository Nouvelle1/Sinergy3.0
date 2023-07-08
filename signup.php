<?php 
session_start();
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$full_name = filter_var(trim($_POST['full_name']), FILTER_SANITIZE_STRING);
$Seriesp = filter_var(trim($_POST['Seriesp']), FILTER_SANITIZE_STRING);
$Nomerp = filter_var(trim($_POST['Nomerp']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

if (mb_strlen($full_name) < 15 || mb_strlen($full_name) >50) {
    $_SESSION['message'] = 'Недопустимая длина ФИО от 15 до 50';
header('Location: /assets/reg.php');
exit();
}
if (mb_strlen($email) <9 || mb_strlen($email) >25) {
    $_SESSION['message'] = 'Недопустимая длина email от 9 до 25';
header('Location: /assets/reg.php');
exit();
}
if (mb_strlen($email) <1 || mb_strlen($Seriesp) >4) {
    $_SESSION['message'] = 'Недопустимая длина серий паспорта ';
header('Location: /assets/reg.php');
exit();
}
if (mb_strlen($Nomerp) <1 || mb_strlen($Nomerp) >6) {
    $_SESSION['message'] = 'Недопустимая длина номера паспорта';
header('Location: /assets/reg.php');
exit();
}
if (mb_strlen($password) <8 || mb_strlen($password) >32) {
    $_SESSION['message'] = 'Недопустимая длина пароля от 8 до 32';
header('Location: /assets/reg.php');
exit();
}

$password = md5($password."fdfdfgsdgfdgsfdg34234");

$mysql = new mysqli('localhost', 'root', 'root', 'register-bq');
$mysql->query("INSERT INTO `users` (`email`, `full_name`, `Seriesp`, `Nomerp`, `password`)
VALUES('$email', '$full_name', '$Seriesp', '$Nomerp', '$password')");

$mysql->close();

header('Location: /assets/vendor/vxod.php');
?>