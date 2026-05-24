<?php
$host = "localhost";
$port = 3306;
$user = "bgonzalez";
$pass = "BgX91mQp#";
$db   = "bgonzalez_db1";
$charset = "utf8mb4";

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>