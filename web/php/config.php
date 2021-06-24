<?php

$servernameDB = "db";
$usernameDB = "admin";
$passwordDB = "password";
$nameDB = "boyteDB";

// Create connection
$conn = new mysqli($servernameDB, $usernameDB, $passwordDB, $nameDB);
// Check connection
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$conn->close();

?>