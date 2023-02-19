<!-- Проверяю работатет ли гит и я Азиз -->


<?php

session_start();

// Подключение к базе данных
require_once 'config/connect.php';

// Проверка, был ли отправлен запрос на вход
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Запрос к базе данных на поиск пользователя с таким же логином и паролем
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($connect, $query);

  if (mysqli_num_rows($result) == 1) {
    // Если пользователь найден, то создаем сессию и перенаправляем на админ панель
    $_SESSION['username'] = $username;
    header('Location: admin_panel.php');
  } else {
    // Иначе выводим сообщение об ошибке
    $error_msg = "Неверный логин или пароль. Попробуйте еще раз.";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/admin_login.css">
    <title>Вход в админ панель</title>
</head>
<body>
  <div id="login-form">
    <h1>Вход в админ панель</h1>
    <?php if (isset($error_msg)) { ?>
      <p class="error"><?php echo $error_msg; ?></p>
    <?php } ?>
    <form method="post" action="">
      <label>Логин:</label>
      <input type="text" name="username">
      <label>Пароль:</label>
      <input type="password" name="password">
      <input type="submit" name="login" value="Войти">
    </form>
  </div>
</body>
</html>