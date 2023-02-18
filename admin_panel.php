<?php 
  // Подключение к базе данных
  require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/admin_panel.css">
    <title>Админка</title>
  </head>
  <body>
    <center><h1>Новости</h1></center>
    <button class="faculty-btn" onclick="window.location.href = 'faculty.php';">Факультеты</button>
    <button class="add-news-btn" onclick="window.location.href = 'add_news.php';">Добавить новость</button>
    <div class="container">
        <?php 
          $news = mysqli_query($connect, "SELECT * FROM `news`");
          $news = mysqli_fetch_all($news);
          foreach ($news as $arqument) {
              $id = $arqument[0];
              $title = $arqument[1];
              $description = $arqument[2];
              $date = $arqument[4];
              $image = $arqument[6];
              $views = $arqument[9];
        ?>
        <div class="card">
          <div style="position: relative;">
            <img src="img_archive/<?= $image?>">
            <button class="edit-news-btn" onclick='window.location.href = "update_news.php?id=<?=$id ?>";'>Редактировать</button>
          </div>
          <h2><?= $title?></h2>
          <div class="meta">
            <span class="date">Опубликовано: <?= $date?></span>
            <span class="views">Просмотров: <?= $views?></span>
          </div>
            <p><?= $description?></p>
        <button class="delete-news-btn" onclick='window.location.href = "vendor/delete_news.php?id=<?= $id?>"'>Удалить</button>
        </div>

        <?php
          }
        ?>

  </body>
</html>