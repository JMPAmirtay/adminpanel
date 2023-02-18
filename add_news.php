<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/add_news.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Добавить новость</title>
</head>
<body>
<button class="main " onclick="window.location.href = 'admin_panel.php';">Главная</button>
<form action="vendor/add_news.php" method="post">
  <label for="title">Заголовок:</label>
  <input type="text" id="title" name="title"><br>

  <label for="description">Описание:</label>
  <textarea id="description" name="description"></textarea><br>

  <label for="text">Текст:</label>
  <textarea id="text" name="text"></textarea><br>

  <label for="pubdate">Дата публикации:</label>
  <input type="date" id="pubdate" name="pubdate"><br>

  <label for="author">Автор:</label>
  <input type="text" id="author" name="author"><br>

  <label for="image">Изображение:</label>
  <input type="file" id="image" name="image"><br>

<!--   <label for="category">Категория:</label>
  <select id="category" name="category">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select><br> -->

  <label for="tags">Теги:</label>
  <input type="text" id="tags" name="tags"><br>

  <label for="status">Статус:</label>
  <select id="status" name="status">
    <option value="draft">Черновик</option>
    <option value="published">Опубликован</option>
    <option value="archived">Архивирован</option>
  </select><br>

  <input type="submit" value="Отправить">
</form>

</body>
</html>