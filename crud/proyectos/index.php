<?php

session_start();

if(!isset($_SESSION['usuario'])){

    header("Location: ../../login.php");

    exit();

}

include '../../config/conexion.php';


$query = "SELECT * FROM proyectos";

$resultado = mysqli_query($conn, $query);


?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>CRUD Proyectos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1>
            Gestión de Proyectos
        </h1>

        <a href="crear.php"
           class="btn btn-success">

            Nuevo Proyecto

        </a>

    </div>

    <table class="table table-bordered table-hover bg-white">

        <thead class="table-dark">

            <tr>

                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Acciones</th>

            </tr>

        </thead>

        <tbody>

            <?php while($fila = mysqli_fetch_assoc($resultado)): ?>

                <tr>

                    <td>
                        <?php echo $fila['id']; ?>
                    </td>

                    <td>
                        <?php echo $fila['titulo']; ?>
                    </td>

                    <td>
                        <?php echo $fila['descripcion']; ?>
                    </td>

                    <td>

                        <a href="editar.php?id=<?php echo $fila['id']; ?>"
                           class="btn btn-warning btn-sm">

                            Editar

                        </a>

                        <a href="eliminar.php?id=<?php echo $fila['id']; ?>"
                           class="btn btn-danger btn-sm">

                            Eliminar

                        </a>

                    </td>

                </tr>

            <?php endwhile; ?>

        </tbody>

    </table>

</div>

</body>

</html>