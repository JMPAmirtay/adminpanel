<?php 
  // Подключение к базе данных
  require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/faculty.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Факультеты</title>
</head>
<body>
    <script>
    function loadDoc(url) {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", 'faculty/' + url, true);
      xhttp.send();
    }
    </script>
    <center><h1>Факультеты</h1></center>
    <button class="news-btn" onclick="window.location.href = 'admin_panel.php';">Новости</button>
    <center>
      <div class="container">
        <?php 
          $faculties = mysqli_query($connect, "SELECT * FROM `faculty`");
          $faculties = mysqli_fetch_all($faculties);
          foreach ($faculties as $faculty) {
        ?>
          <button class="faculty-btn" onclick="loadDoc('agrobiology.php?id=<?= $faculty[0]?>')"><?= $faculty[1]?></button>
        <?php
          }
         ?>
      </div>
      <div id="demo"></div>
    </center>
</body>
</html>