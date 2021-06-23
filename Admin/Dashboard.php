<?php
  include ('../php/restrict.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang tổng quan</title>

    <link rel="shortcut icon" href="/img/Logoboyte.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/Admin.css">

</head>
<body style="width: 90%;">
    <nav class="navbar navbar-light bg-light" style="width: 111%;">
        <div class="container">
          <a class="navbar-brand">
            <img src="/img/Logoboyte.svg" alt="" width="80" height="80">
            <span class=" fs-2 navbar-brand mb-0 h1"> Trang cập nhật tin tức dịch bệnh Covid-19 Việt Nam</span>
          </a>
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page">Bài Đăng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Admin/Changepassword.php">Đổi mật khẩu</a>
            </li>
            <li class="btn-logout nav-item">
              <a class="nav-link" href="/php/logout.php">Đăng xuất</a>
            </li>
          </ul>
      </nav>

    <table class="table">
      <tr>
        <th>Tiêu Đề</th>
        <th>Nội Dung</th>
        <th>Ngày Đăng</th>
        <th>Thao Tác</th>
      </tr>
      <?php
        include ('../php/config.php');

        $conn = new mysqli($servernameDB, $usernameDB, $passwordDB, $nameDB);
        $result = mysqli_query($conn, "SELECT * FROM news");

        while($row = mysqli_fetch_array($result)) {
          $id = $row['id'];
          echo "<tr>
                  <td>" . $row['title'] . "</td>
                  <td>" . $row['content'] . "</td>
                  <td>" . $row['date'] . "</td>
                  <td>
                    <a class=\"btn btn-success\" href=\"/Admin/Edit.php?id=$id\">Sửa</a>
                  </td>
                  </tr>";
        }
      ?>

    </table>
    <a type="button" class="btn btn-outline-primary" style="margin-left: 5%" href="/Admin/Create.php" >Bài viết mới</a>
</body>
</html>