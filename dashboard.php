<?php

session_start();

if(!isset($_SESSION['usuario'])){

    header("Location: login.php");

    exit();

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">

    <div class="container">

        <span class="navbar-brand">

            Dashboard Administrativo

        </span>

        <a href="logout.php"
           class="btn btn-danger">

            Cerrar Sesión

        </a>

    </div>

</nav>

<!-- CONTENIDO -->
<div class="container py-5">

    <h1 class="mb-4">

        Bienvenido,
        <?php echo $_SESSION['usuario']; ?>

    </h1>

    <div class="row g-4">

        <!-- Biografía -->
        <div class="col-md-3">

            <div class="card shadow-sm text-center p-4">

                <h4>
                    Biografía
                </h4>

                <p>
                    Administrar información personal.
                </p>

                <a href="#"
                   class="btn btn-primary">

                    Gestionar

                </a>

            </div>

        </div>

        <!-- Habilidades -->
        <div class="col-md-3">

            <div class="card shadow-sm text-center p-4">

                <h4>
                    Habilidades
                </h4>

                <p>
                    Administrar habilidades técnicas.
                </p>

                <a href="#"
                   class="btn btn-primary">

                    Gestionar

                </a>

            </div>

        </div>

        <!-- Tecnologías -->
        <div class="col-md-3">

            <div class="card shadow-sm text-center p-4">

                <h4>
                    Tecnologías
                </h4>

                <p>
                    Administrar tecnologías dominadas.
                </p>

                <a href="#"
                   class="btn btn-primary">

                    Gestionar

                </a>

            </div>

        </div>

        <!-- Proyectos -->
        <div class="col-md-3">

            <div class="card shadow-sm text-center p-4">

                <h4>
                    Proyectos
                </h4>

                <p>
                    Administrar proyectos realizados.
                </p>

                <a href="crud/proyectos/index.php"
                   class="btn btn-primary">

                    Gestionar

                </a>

            </div>

        </div>

    </div>

</div>

</body>

</html>