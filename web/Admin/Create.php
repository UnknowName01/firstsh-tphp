<?php
  include ('../php/restrict.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo bài viết mới</title>

    <link rel="shortcut icon" href="/img/Logoboyte.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/Admin.css">
    <link rel="stylesheet" href="/css/Edit.css">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand">
            <img src="/img/Logoboyte.svg" alt="" width="80" height="80">
            <span class=" fs-2 navbar-brand mb-0 h1"> Trang cập nhật tin tức dịch bệnh Covid-19 Việt Nam</span>
          </a>
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/Admin/Dashboard.php">Bài Đăng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Admin/Changepassword.php">Đổi mật khẩu</a>
            </li>
            <li class="btn-logout nav-item">
              <a class="nav-link" href="/php/logout.php">Đăng xuất</a>
            </li>
          </ul>
      </nav>

      <div class="text-edit-label fs-3">Bài viết mới</div>

      <form class="form-editor" action = "#" method="post">
          <div class="input-group mb-3">
              <span class="inp-title input-group-text" id="basic-addon1">Tiêu Đề</span>
              <input type="text" name="title" class="form-control" aria-describedby="basic-addon1" required>
          </div>
      
          <div class="input-group">
              <span class="input-group-text">Nội Dung</span>
              <textarea class="form-control" name="content" cols="30" rows="10"></textarea>
          </div>
  
          <div class="btn-edit">
              <button type="submit" name="savecreate" class="btn btn-info">Lưu</button>
              <a type="button" class="btn btn-warning" href="/Admin/Dashboard.php">Hủy</a>
          </div>
          
      </form>

      <?php
        
        if (isset($_POST['savecreate'])) {

          include ('../php/config.php');
          date_default_timezone_set("Asia/Ho_Chi_Minh");
          $conn = new mysqli($servernameDB, $usernameDB, $passwordDB, $nameDB);
          
          $title = $_POST['title'];
          $content = $_POST['content'];

          $sql = "INSERT INTO `news`(`title`, `content`, `date`) VALUES ('$title','$content',NOW())" ;
          $re = mysqli_query($conn, $sql);
          if (!$re) {
            echo '<div class="alert alert-danger" style="width: 40%; left: 30%;" role="alert">
              Có lỗi xảy ra!
              </div>';
          }
          else{
          //  header('location:Dashboard.php');
          echo("<script>location.href = '/Admin/Dashboard.php';</script>");
          }
        }
      ?>
</body>
</html>