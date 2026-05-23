<?php

include 'config/conexion.php';

$query = "SELECT * FROM proyectos";

$resultado = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Mi Portafolio</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
      

    <!-- CSS -->
    <link rel="stylesheet"
          href="assets/css/style.css">

</head>

<body>

    <!-- NAVBAR -->
    <?php include 'includes/navbar.php'; ?>


    <!-- HERO -->
    <section class="hero d-flex align-items-center text-white">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <h1 class="display-4 fw-bold">
                        Hola, soy Esteban
                    </h1>

                    <p class="lead">
                        Desarrollador web y estudiante de informática.
                    </p>

                    <a href="#contacto"
                       class="btn btn-primary btn-lg">

                        Contáctame

                    </a>

                </div>

                <div class="col-md-6 text-center">

                    <img src="assets/img/kike.jpg"
     class="img-fluid rounded-circle shadow"
     style="width: 300px; height: 300px; object-fit: cover;">

                </div>

            </div>

        </div>

    </section>
    <!-- BIOGRAFÍA -->
<section id="bio">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-5 text-center">

                <img src="assets/img/kike.jpg"
                     class="img-fluid rounded shadow"
                     style="width: 350px; height: 350px; object-fit: cover;">

            </div>

            <div class="col-md-7">

                <h2 class="fw-bold mb-4">
                    Sobre mí
                </h2>

                <p>
                    Soy estudiante de informática y desarrollador web en formación,
                    apasionado por el desarrollo frontend y backend.
                </p>

                <p>
                    Me interesa crear aplicaciones modernas, funcionales
                    y enfocadas en la experiencia de usuario.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- HABILIDADES -->
<section id="habilidades" class="bg-light">

    <div class="container">

        <h2 class="text-center fw-bold mb-5">
            Habilidades
        </h2>

        <div class="row g-4">

            <!-- Frontend -->
            <div class="col-md-4">

                <div class="card shadow-sm h-100 text-center p-4">

                    <h4 class="mb-3">
                        Frontend
                    </h4>

                    <p>
                        Desarrollo de interfaces modernas utilizando
                        HTML5, CSS3, Bootstrap y JavaScript.
                    </p>

                </div>

            </div>

            <!-- Backend -->
            <div class="col-md-4">

                <div class="card shadow-sm h-100 text-center p-4">

                    <h4 class="mb-3">
                        Backend
                    </h4>

                    <p>
                        Desarrollo backend con PHP, MySQL
                        y manejo de bases de datos.
                    </p>

                </div>

            </div>

            <!-- Herramientas -->
            <div class="col-md-4">

                <div class="card shadow-sm h-100 text-center p-4">

                    <h4 class="mb-3">
                        Herramientas
                    </h4>

                    <p>
                        GitHub, Visual Studio Code
                        e Inteligencia Artificial aplicada al desarrollo web.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- TECNOLOGÍAS -->
<section id="tecnologias">

    <div class="container">

        <h2 class="text-center fw-bold mb-5">
            Tecnologías Dominadas
        </h2>

        <!-- HTML -->
        <div class="mb-4">

            <div class="d-flex justify-content-between">

                <span>HTML5</span>
                <span>90%</span>

            </div>

            <div class="progress">

                <div class="progress-bar bg-primary"
                     style="width: 90%">

                </div>

            </div>

        </div>

        <!-- CSS -->
        <div class="mb-4">

            <div class="d-flex justify-content-between">

                <span>CSS3</span>
                <span>85%</span>

            </div>

            <div class="progress">

                <div class="progress-bar bg-success"
                     style="width: 85%">

                </div>

            </div>

        </div>

        <!-- JavaScript -->
        <div class="mb-4">

            <div class="d-flex justify-content-between">

                <span>JavaScript</span>
                <span>75%</span>

            </div>

            <div class="progress">

                <div class="progress-bar bg-warning"
                     style="width: 75%">

                </div>

            </div>

        </div>

        <!-- PHP -->
        <div class="mb-4">

            <div class="d-flex justify-content-between">

                <span>PHP</span>
                <span>70%</span>

            </div>

            <div class="progress">

                <div class="progress-bar bg-danger"
                     style="width: 70%">

                </div>

            </div>

        </div>

        <!-- MySQL -->
        <div class="mb-4">

            <div class="d-flex justify-content-between">

                <span>MySQL</span>
                <span>70%</span>

            </div>

            <div class="progress">

                <div class="progress-bar bg-dark"
                     style="width: 70%">

                </div>

            </div>

        </div>

    </div>

</section>
<!-- PROYECTOS -->
<section id="proyectos" class="bg-light">

    <!-- PROYECTOS -->
<section id="proyectos">

    <div class="container">

        <h2 class="text-center fw-bold mb-5">
            Proyectos
        </h2>

        <div class="row g-4">

            <?php while($fila = mysqli_fetch_assoc($resultado)): ?>

                <div class="col-md-4">

                    <div class="card shadow h-100">

                        <img src="assets/img/proyecto.jpg"
                             class="card-img-top">

                        <div class="card-body">

                            <h5 class="card-title">

                                <?php echo $fila['titulo']; ?>

                            </h5>

                            <p class="card-text">

                                <?php echo $fila['descripcion']; ?>

                            </p>

                            <a href="<?php echo $fila['github']; ?>"
                               class="btn btn-dark"
                               target="_blank">

                                GitHub

                            </a>

                            <a href="<?php echo $fila['demo']; ?>"
                               class="btn btn-primary"
                               target="_blank">

                                Demo

                            </a>

                        </div>

                    </div>

                </div>

            <?php endwhile; ?>

        </div>

    </div>

</section>

</section>
<!-- CONTACTO -->
<section id="contacto">

    <div class="container">

        <h2 class="text-center fw-bold mb-5">
            Contacto
        </h2>

        <div class="row justify-content-center">

            <div class="col-md-8">

                <form id="formContacto">

                    <!-- Nombre -->
                    <div class="mb-3">

                        <label class="form-label">
                            Nombre
                        </label>

                        <input type="text"
                               class="form-control"
                               id="nombre">

                    </div>

                    <!-- Correo -->
                    <div class="mb-3">

                        <label class="form-label">
                            Correo
                        </label>

                        <input type="email"
                               class="form-control"
                               id="correo">

                    </div>

                    <!-- Asunto -->
                    <div class="mb-3">

                        <label class="form-label">
                            Asunto
                        </label>

                        <input type="text"
                               class="form-control"
                               id="asunto">

                    </div>

                    <!-- Mensaje -->
                    <div class="mb-3">

                        <label class="form-label">
                            Mensaje
                        </label>

                        <textarea class="form-control"
                                  rows="5"
                                  id="mensaje"></textarea>

                    </div>

                    <button type="submit"
                            class="btn btn-primary">

                        Enviar Mensaje

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>


    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>