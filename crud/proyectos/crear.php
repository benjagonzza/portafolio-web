<?php

session_start();

include '../../config/conexion.php';
echo "conexion funcionando";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $github = $_POST['github'];
    $demo = $_POST['demo'];

    $query = "INSERT INTO proyectos
    (titulo, descripcion, github, demo)

    VALUES(

        '$titulo',
        '$descripcion',
        '$github',
        '$demo'

    )";

    mysqli_query($conn, $query);
   

    header("Location: index.php");

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Crear Proyecto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container py-5">

    <div class="col-md-6 mx-auto">

        <div class="card shadow">

            <div class="card-body">

                <h2 class="mb-4">
                    Nuevo Proyecto
                </h2>

                <form method="POST">

                    <div class="mb-3">

                        <label>
                            Título
                        </label>

                        <input type="text"
                               name="titulo"
                               class="form-control">

                    </div>

                    <div class="mb-3">

                        <label>
                            Descripción
                        </label>

                        <textarea name="descripcion"
                                  class="form-control"></textarea>

                    </div>

                    <div class="mb-3">

                        <label>
                            GitHub
                        </label>

                        <input type="text"
                               name="github"
                               class="form-control">

                    </div>

                    <div class="mb-3">

                        <label>
                            Demo
                        </label>

                        <input type="text"
                               name="demo"
                               class="form-control">

                    </div>

                    <button class="btn btn-success">

                        Guardar Proyecto

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>

</html>z