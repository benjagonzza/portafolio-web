<?php

session_start();

include '../../config/conexion.php';

$id = $_GET['id'];

$query = "SELECT * FROM proyectos WHERE id = $id";

$resultado = mysqli_query($conn, $query);

$proyecto = mysqli_fetch_assoc($resultado);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $github = $_POST['github'];
    $demo = $_POST['demo'];

    $update = "UPDATE proyectos SET

    titulo='$titulo',
    descripcion='$descripcion',
    github='$github',
    demo='$demo'

    WHERE id=$id";

    mysqli_query($conn, $update);

    header("Location: index.php");

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Editar Proyecto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container py-5">

    <div class="col-md-6 mx-auto">

        <div class="card shadow">

            <div class="card-body">

                <h2 class="mb-4">
                    Editar Proyecto
                </h2>

                <form method="POST">

                    <div class="mb-3">

                        <label>
                            Título
                        </label>

                        <input type="text"
                               name="titulo"
                               class="form-control"
                               value="<?php echo $proyecto['titulo']; ?>">

                    </div>

                    <div class="mb-3">

                        <label>
                            Descripción
                        </label>

                        <textarea name="descripcion"
                                  class="form-control"><?php echo $proyecto['descripcion']; ?></textarea>

                    </div>

                    <div class="mb-3">

                        <label>
                            GitHub
                        </label>

                        <input type="text"
                               name="github"
                               class="form-control"
                               value="<?php echo $proyecto['github']; ?>">

                    </div>

                    <div class="mb-3">

                        <label>
                            Demo
                        </label>

                        <input type="text"
                               name="demo"
                               class="form-control"
                               value="<?php echo $proyecto['demo']; ?>">

                    </div>

                    <button class="btn btn-warning">

                        Actualizar Proyecto

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</body>

</html>