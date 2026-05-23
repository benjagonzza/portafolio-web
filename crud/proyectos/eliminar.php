<?php

session_start();

include '../../config/conexion.php';

$id = $_GET['id'];

$query = "DELETE FROM proyectos WHERE id = $id";

mysqli_query($conn, $query);

header("Location: index.php");

?>