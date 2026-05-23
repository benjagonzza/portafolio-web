<?php

session_start();

include 'config/conexion.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuarios
              WHERE usuario='$usuario'
              AND password='$password'";

    $resultado = mysqli_query($conn, $query);

    {

        $_SESSION['usuario'] = $usuario;

        header("Location: dashboard.php");

    

        $error = "Datos incorrectos";

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

    <div class="row justify-content-center vh-100 align-items-center">

        <div class="col-md-4">

            <div class="card shadow">

                <div class="card-body">

                    <h2 class="text-center mb-4">
                        Iniciar Sesión
                    </h2>

                    <?php if(isset($error)): ?>

                        <div class="alert alert-danger">

                            <?php echo $error; ?>

                        </div>

                    <?php endif; ?>

                    <form method="POST">

                        <div class="mb-3">

                            <label>
                                Usuario
                            </label>

                            <input type="text"
                                   name="usuario"
                                   class="form-control">

                        </div>

                        <div class="mb-3">

                            <label>
                                Contraseña
                            </label>

                            <input type="password"
                                   name="password"
                                   class="form-control">

                        </div>

                        <button class="btn btn-primary w-100">

                            Ingresar

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>