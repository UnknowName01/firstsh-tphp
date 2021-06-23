<?php
    include ('./php/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    
    <link rel="shortcut icon" href="/img/Logoboyte.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="/css/index.css">

    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand">
          <img src="/img/Logoboyte.svg" alt="" width="80" height="80">
          <span class=" fs-2 navbar-brand mb-0 h1"> Trang cập nhật tin tức dịch bệnh Covid-19 Việt Nam</span>
        </a>
      </div>
    </nav>

  </head>
<body>
    <h2 class="title-news">Tin tức</h2>
    
    <?php
      include ('./php/config.php');
      $conn = new mysqli($servernameDB, $usernameDB, $passwordDB, $nameDB);
      $result = mysqli_query($conn, "SELECT * FROM news");

      while($row = mysqli_fetch_array($result)){
        echo "<h3 class=\"head-news\">" .$row['title']. "</h3>
              <p class=\"content-news\">" .$row['content']. "</p>";
      }
    ?>
</body>
</html>