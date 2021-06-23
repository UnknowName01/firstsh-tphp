<?php
  include ('../php/restrict.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi Mật Khẩu</title>

    <link rel="shortcut icon" href="/img/Logoboyte.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/login.css">

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
              <a class="nav-link" href="/Admin/Dashboard.php">Bài Đăng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page">Đổi mật khẩu</a>
            </li>
            <li class="btn-logout nav-item">
              <a class="nav-link" href="/php/logout.php">Đăng xuất</a>
            </li>
          </ul>
      </nav>

      <form class="form_box" action="#" method="post">
        <div class="form-floating mb-3">
            <input type="password" name="oldpass" class="form-control" id="floatingInput" placeholder="name" required>
            <label for="floatingInput">Mật Khẩu Cũ</label>
        </div>
        
        <div class="form-floating">
            <input type="password" name="newpass" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Mật Khẩu Mới</label>
        </div>

        <div class="form-floating">
          <input type="password" name="renewpass" class="form-control" id="floatingPassword" placeholder="Password" required>
          <label for="floatingPassword">Nhập Lại Mật Khẩu</label>
        </div>

        <button type="submit" name="changepass" class="btn-login btn btn-primary">Xác Nhận</button>
    </form>

    <?php
      include ('../php/config.php');

      if (isset($_POST['changepass'])){
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];
        $renewpass = $_POST['renewpass'];

        if ($newpass == $renewpass) {
          $conn = new mysqli($servernameDB, $usernameDB, $passwordDB, $nameDB);

          $sql = "SELECT * FROM users WHERE username = 'admin' ";
          $re = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($re);

          if ($row["password"] == $oldpass) {
            $sqlchange = "UPDATE `users` SET `password`='$newpass' WHERE `username` = 'admin' ";
            $changedb = mysqli_query($conn, $sqlchange);

            if (!$changedb) {
              echo '<div class="alert alert-danger" style="width: 40%; left: 30%;" role="alert">
              Có lỗi xảy ra!
              </div>';
            }
            else{
              echo '<div class="alert alert-success" style="width: 40%; left: 30%;" role="alert">
              Đổi Mật Khẩu thành công!
              </div>';
            }
             
          }
          else{
            echo '<div class="alert alert-danger" style="width: 40%; left: 30%;" role="alert">
          Mật Khẩu Cũ không đúng!
          </div>';
          }

        }
        else{
          echo '<div class="alert alert-danger" style="width: 40%; left: 30%;" role="alert">
          Mật Khẩu Mới và Nhập Lại Mật Khẩu không trùng!
          </div>';
        }
      }
    ?>
</body>
</html>