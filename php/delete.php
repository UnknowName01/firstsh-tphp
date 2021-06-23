<?php
    include ('config.php');
    include ('restrict.php');
    $id = $_GET['id'];
    $conn = new mysqli($servernameDB, $usernameDB, $passwordDB, $nameDB);
    $sql = "DELETE FROM news WHERE id = '$id'";
    $re = mysqli_query($conn, $sql);
    header("Location: /Admin/Dashboard.php");
     
?>