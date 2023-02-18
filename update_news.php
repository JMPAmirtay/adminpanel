<?php 
  // Подключение к базе данных
  require_once 'config/connect.php';
  $news_id = $_GET['id'];

  $news = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = '$news_id'");

  $news = mysqli_fetch_assoc($news);

  // var_dump($news);
?>

 <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/add_news.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Редактировать новость</title>
</head>
<body>
<button class="main " onclick="window.location.href = 'admin_panel.php';">Главная</button>
<form action="vendor/update_news.php" method="post">
  <input type="hidden" name="id" value="<?= $news['id']?>">
  <label for="title">Заголовок:</label>
  <input type="text" id="title" name="title" value="<?= $news['Title']?>"><br>

  <label for="description">Описание:</label>
  <textarea id="description" name="description"><?= $news['Description']?></textarea><br>

  <label for="text">Текст:</label>
  <textarea id="text" name="text"><?= $news['Text']?></textarea><br>

  <label for="pubdate">Дата публикации:</label>
  <input type="date" id="pubdate" name="pubdate" value="<?= $news['Publication Date']?>"><br>

  <label for="author">Автор:</label>
  <input type="text" id="author" name="author" value="<?= $news['Author']?>"><br>

  <label for="image">Изображение:</label>
  <input type="file" id="image" name="image" value="<?= $news['Image']?>"><br>

<!--   <label for="category">Категория:</label>
  <select id="category" name="category">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select><br> -->

  <label for="tags">Теги:</label>
  <input type="text" id="tags" name="tags" value="<?= $news['Tags']?>"><br>

  <label for="status">Статус:</label>
  <select id="status" name="status" value="<?= $news['Status']?>">
    <option value="draft" <?php if ($news['Status'] == "draft") echo "selected";?>>Черновик</option>
    <option value="published" <?php if ($news['Status'] == "published") echo "selected";?>>Опубликован</option>
    <option value="archived" <?php if ($news['Status'] == "archived") echo "selected";?>>Архивирован</option>
  </select><br>

  <input type="submit" value="Редактировать">
</form>

</body>
</html> 