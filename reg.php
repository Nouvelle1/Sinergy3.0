<?php
session_start();
?>


<!DOCTYPE html>
<html lang="ru">
<meta charset="UTF-8" />
    <link rel="stylesheet" href="Css/mtyp.css">
    <link rel="stylesheet"href="Css/muty.css">
    <link rel="icon" href="https://www.pinclipart.com/picdir/big/392-3922402_bca-student-handbook-love-books-icon-png-clipart.png">
    <title>Регистрация</title>
</head>
<body>
   <form action="vendor/signup.php"  method="post">
   <label>Email</label>
   <input type="email" name="email" placeholder="Введите свой Email">
   <label>ФИО</label>
   <input type="text" name="full_name" placeholder="Введите Фамилию Имя Отчество">
   <label>Серия паспорта</label>
   <input type="Seriesp" name="Seriesp" placeholder="Введите Серия паспорта">
   <label>Номер паспорта</label>
   <input type="Nomerp" name="Nomerp" placeholder="Введите номер паспорта">
   <label>Пароль</label>
   <input type="password" name="password" placeholder="Введите Пароль">
   <button type="submit">Войти</button>
<p>У вас уже есть аккаунт? - <a href="vendor/vxod.php">Авторизируйтесь</a>!</p>
<?php
 if ($_SESSION['message']) {
   echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
     }
  unset($_SESSION['message']);
  ?>

   </form>
</body>
   </html>
   

   



























    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
   
