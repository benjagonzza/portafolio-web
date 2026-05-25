<?php
// Incluir la conexión a la base de datos
include 'config/conexion.php';

// Consulta para traer los proyectos reales de la base de datos
$query_proyectos = "SELECT * FROM proyectos ORDER BY id DESC";
$resultado_proyectos = mysqli_query($conn, $query_proyectos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benjamín González | Desarrollador Web Full Stack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            scroll-behavior: smooth;
        }
        .navbar {
            background-color: #1e293b !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar-brand, .nav-link {
            color: #f8fafc !important;
        }
        .nav-link:hover {
            color: #38bdf8 !important;
        }
        .hero-section {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #fff;
            padding: 100px 0;
        }
        .hero-img {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #38bdf8;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        .section-title {
            position: relative;
            margin-bottom: 40px;
            font-weight: 700;
            color: #0f172a;
        }
        .section-title::after {
            content: '';
            width: 60px;
            height: 4px;
            background-color: #38bdf8;
            position: absolute;
            bottom: -10px;
            left: 0;
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .progress {
            height: 12px;
            border-radius: 6px;
            background-color: #e2e8f0;
        }
        .progress-bar {
            background-color: #38bdf8;
            border-radius: 6px;
        }
        .footer {
            background-color: #0f172a;
            color: #94a3b8;
            padding: 30px 0;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">B.G.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#bio">Biografía</a></li>
                    <li class="nav-item"><a class="nav-link" href="#habilidades">Habilidades</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tecnologias">Tecnologías</a></li>
                    <li class="nav-item"><a class="nav-link" href="#proyectos">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-light btn-sm px-3 mt-1" href="login.php"><i class="fa-solid fa-lock me-2"></i>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section">
        <div class="container">
            <div class="row align-items-center text-center text-md-start">
                <div class="col-md-7">
                    <h1 class="display-4 fw-bold mb-3">Hola, soy Benjamín González</h1>
                    <p class="h3 text-muted mb-4" style="color: #38bdf8 !important;">Desarrollador Web Full Stack &amp; Estudiante de Informática</p>
                    <p class="lead mb-4" style="color: #cbd5e1;">Especializado en la creación de soluciones tecnológicas eficientes, interfaces intuitivas y arquitecturas de bases de datos robustas.</p>
                    <div class="d-flex justify-content-center justify-content-md-start gap-3">
                        <a href="#contacto" class="btn btn-info btn-lg px-4 text-white fw-semibold" style="background-color: #38bdf8; border: none;">Contáctame</a>
                        <a href="#proyectos" class="btn btn-outline-light btn-lg px-4">Ver Proyectos</a>
                    </div>
                </div>
                <div class="col-md-5 text-center mt-5 mt-md-0">
                    <img src="assets/img/kike.jpg" alt="Benjamín González" class="hero-img">
                </div>
            </div>
        </div>
    </header>

    <section id="bio" class="py-5 container">
        <div class="row py-4">
            <div class="col-12">
                <h2 class="section-title">Sobre mí</h2>
                <p class="fs-5 mb-3 leading-relaxed">Estudiante de Informática con un sólido enfoque en el desarrollo de software y aplicaciones web. Me apasiona transformar problemas complejos y requerimientos abstractos en soluciones digitales eficientes, dinámicas y completamente escalables.</p>
                <p class="fs-5 mb-4 leading-relaxed">Cuento con conocimientos en la arquitectura y diseño de interfaces de usuario (Frontend), así como en la lógica de servidores y persistencia de datos (Backend). Mi enfoque se centra en la aplicación de buenas prácticas de programación, el análisis y resolución ágil de errores y el aprendizaje continuo de nuevas tecnologías.</p>
            </div>
        </div>
    </section>

    <section id="habilidades" class="bg-light py-5">
        <div class="container py-4">
            <h2 class="section-title">Habilidades Profesionales</h2>
            <div class="row g-4 mt-2">
                <div class="col-md-4">
                    <div class="card h-100 p-4">
                        <div class="text-primary mb-3"><i class="fa-solid fa-code fa-2x" style="color: #38bdf8;"></i></div>
                        <h4 class="fw-bold">Frontend Development</h4>
                        <p class="text-muted">Desarrollo de interfaces modernas, adaptativas y altamente intuitivas utilizando HTML5, CSS3, Bootstrap y lógicas funcionales en JavaScript.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4">
                        <div class="text-primary mb-3"><i class="fa-solid fa-server fa-2x" style="color: #38bdf8;"></i></div>
                        <h4 class="fw-bold">Backend &amp; Bases de Datos</h4>
                        <p class="text-muted">Construcción de lógica de negocio robusta mediante PHP y diseño, normalización y optimización de bases de datos relacionales con MySQL.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4">
                        <div class="text-primary mb-3"><i class="fa-solid fa-screwdriver-wrench fa-2x" style="color: #38bdf8;"></i></div>
                        <h4 class="fw-bold">Herramientas</h4>
                        <p class="text-muted">Control de versiones avanzado con Git/GitHub y dominio de entornos de desarrollo eficientes como Visual Studio Code para despliegues ágiles.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tecnologias" class="py-5 container">
        <div class="py-4">
            <h2 class="section-title">Tecnologías Dominadas</h2>
            <div class="row mt-4 g-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1 fw-semibold"><span>HTML5 / CSS3</span><span>90%</span></div>
                        <div class="progress"><div class="progress-bar" style="width: 90%"></div></div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1 fw-semibold"><span>JavaScript</span><span>75%</span></div>
                        <div class="progress"><div class="progress-bar" style="width: 75%"></div></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1 fw-semibold"><span>PHP</span><span>80%</span></div>
                        <div class="progress"><div class="progress-bar" style="width: 80%"></div></div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1 fw-semibold"><span>MySQL</span><span>75%</span></div>
                        <div class="progress"><div class="progress-bar" style="width: 75%"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="proyectos" class="bg-light py-5">
        <div class="container py-4">
            <h2 class="section-title">Proyectos Destacados</h2>
            <p class="text-muted mb-4">Proyectos técnicos desarrollados durante mi formación y práctica profesional.</p>
            
            <div class="row g-4">
                <?php
                if ($resultado_proyectos && mysqli_num_rows($resultado_proyectos) > 0) {
                    while($proyecto = mysqli_fetch_assoc($resultado_proyectos)) {
                        // Si el proyecto en la BD tiene imagen la usa, si no, usa proyecto.jpg por defecto
                        $imagen = !empty($proyecto['imagen']) ? $proyecto['imagen'] : 'assets/img/proyecto.jpg';
                        ?>
                        <div class="col-md-4">
                            <div class="card h-100 overflow-hidden shadow-sm">
                                <img src="<?php echo $imagen; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($proyecto['titulo']); ?>" style="height: 200px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title fw-bold"><?php echo htmlspecialchars($proyecto['titulo']); ?></h5>
                                    <p class="card-text text-muted small flex-grow-1"><?php echo htmlspecialchars($proyecto['descripcion']); ?></p>
                                    <div class="d-flex gap-2 mt-3">
                                        <?php if(!empty($proyecto['github'])): ?>
                                            <a href="<?php echo $proyecto['github']; ?>" target="_blank" class="btn btn-outline-dark btn-sm flex-fill"><i class="fab fa-github me-1"></i> GitHub</a>
                                        <?php endif; ?>
                                        <?php if(!empty($proyecto['demo'])): ?>
                                            <a href="<?php echo $proyecto['demo']; ?>" target="_blank" class="btn btn-info btn-sm flex-fill text-white" style="background-color: #38bdf8; border: none;"><i class="fa-solid fa-rocket me-1"></i> Demo</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="col-md-6">
                        <div class="card h-100 overflow-hidden shadow-sm">
                            <img src="assets/img/proyecto.jpg" class="card-img-top" alt="Sistema de Gestión" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Sistema Autónomo de Gestión de Proyectos (CRUD)</h5>
                                <p class="card-text text-muted">Aplicación web dinámica desarrollada en arquitectura PHP nativo y MySQL. Permite la administración integral de proyectos en tiempo real mediante un panel con autenticación segura de usuarios.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 overflow-hidden shadow-sm">
                            <img src="assets/img/proyecto.jpg" class="card-img-top" alt="Portafolio Profesional" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Plataforma Portafolio Web Autogestionable</h5>
                                <p class="card-text text-muted">Sitio web profesional completamente responsivo estructurado con Bootstrap 5 y conectado dinámicamente al backend. Consume los datos de la base para renderizar la información en tiempo real.</p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section id="contacto" class="py-5 container">
        <div class="py-4">
            <div class="row g-5">
                <div class="col-md-5">
                    <h2 class="section-title">Contacto</h2>
                    <p class="fs-5 text-muted mb-4">¿Tienes algún proyecto en mente o te interesa mi perfil técnico? No dudes en comunicarte conmigo.</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-light p-3 rounded-circle text-primary me-3"><i class="fa-solid fa-envelope" style="color: #38bdf8;"></i></div>
                        <div>
                            <h6 class="mb-0 fw-bold">Correo Electrónico</h6>
                            <p class="text-muted mb-0">b.gonzalez@teclab.uct.cl</p> 
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-light p-3 rounded-circle text-primary me-3"><i class="fa-solid fa-location-dot" style="color: #38bdf8;"></i></div>
                        <div>
                            <h6 class="mb-0 fw-bold">Ubicación</h6>
                            <p class="text-muted mb-0">Temuco, Chile</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card p-4 shadow-sm bg-white">
                        <form action="" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-uppercase text-muted">Nombre</label>
                                    <input type="text" class="form-control bg-light border-0 py-2" required placeholder="Tu nombre">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-uppercase text-muted">Correo Electrónico</label>
                                    <input type="email" class="form-control bg-light border-0 py-2" required placeholder="tu@correo.com">
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-bold text-uppercase text-muted">Asunto</label>
                                    <input type="text" class="form-control bg-light border-0 py-2" required placeholder="Motivo del mensaje">
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-bold text-uppercase text-muted">Mensaje</label>
                                    <textarea class="form-control bg-light border-0 py-2" rows="4" required placeholder="Escribe tu mensaje detallado aquí..."></textarea>
                                </div>
                                <div class="col-12 text-end mt-4">
                                    <button type="submit" class="btn btn-dark px-4 fw-semibold py-2">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer text-center">
        <div class="container">
            <p class="mb-2 fw-semibold" style="color: #f8fafc;">&copy; 2026 Benjamín González | Desarrollador Web Full Stack. Todos los derechos reservados.</p>
            <p class="small text-muted mb-0">Construido con PHP, MySQL y Bootstrap 5.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>