<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "portafolio-web";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){

    die("Error de conexión");

}

?>