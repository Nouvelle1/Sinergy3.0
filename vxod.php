<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
    <link rel="stylesheet" href="/assets/Css/mttyp.css">
    <link rel="stylesheet"href="Css/muty.css">
    <link rel="icon" href="https://www.pinclipart.com/picdir/big/392-3922402_bca-student-handbook-love-books-icon-png-clipart.png">
    <title>Авторизация</title>
</head>
<body>
<form action="/assets/vendor/loginvend.php"  method="post">
   <label>Email</label>
   <input type="text" name="email" placeholder="Введите свой Email">
   <label>Пароль</label>
   <input type="password" name="password" placeholder="Введите Пароль">
   <button type="submit">Войти</button>
   <p>
    У вас еще нету аккаунта? - <a href="/assets/reg.php">Регистрируйтесь</a>!
</p>
<?php
 if ($_SESSION['message']) {
   echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
     }
  unset($_SESSION['message']);
  ?>


   
</form>
</body>
</html>