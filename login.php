<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>

    <link rel="shortcut icon" href="/img/Logoboyte.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/login.css">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <span class="login-title navbar-brand mb-0 h1">Đăng Nhập</span>
        </div>
      </nav>
    
    <form class="form_box" action = "#" method="post">
        <div class="form-floating mb-3">
            <input type="text" name="user" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Tài Khoản</label>
        </div>
        
        <div class="form-floating">
            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Mật Khẩu</label>
        </div>

        <button type="submit" name = "login" class="btn-login btn btn-primary">Đăng Nhập</button>

    </form>
    <?php
	if (isset($_POST['login']))
		{
            include './php/config.php';
		//	$username = mysqli_real_escape_string($con, $_POST['username']);
		//	$password = mysqli_real_escape_string($con, $_POST['password']);
		
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $conn = new mysqli($servernameDB, $usernameDB, $passwordDB, $nameDB);

            $sql = "SELECT * FROM `users` WHERE `username` = '$user' and `password` = '$pass' ";
            $re = mysqli_query($conn, $sql);

            if (mysqli_num_rows($re) == 1) {
            //    echo 'OK';
                $_SESSION['admin'] = 'admin';
            //    header("Location: Admin/Dashboard.php");
            //    exit;
                echo("<script>location.href = '/Admin/Dashboard.php';</script>");
            }
            else {
                echo '<div class="alert alert-danger" style="width: 40%; left: 30%;" role="alert">
                    Sai tài khoản hoặc mật khẩu!
                    </div>';
            }
		}
    ?>
</body>
</html>