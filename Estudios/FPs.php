<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadatos y enlaces a estilos e iconos -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/FPs.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Proyecto intermodular</title>
</head>

<body class="d-flex flex-column">
    <header class="p-3 custom-bg-color text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <a href="../Index.php" class="navbar-brand d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="../img/apuntes.jpg" width="150" height="40" class="me-2" alt="Logo">
                </a>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 ms-lg-auto me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                </form>
                <?php
                session_start();
                if(isset($_SESSION["nombreUsu"])) {
                    // Si el usuario ha iniciado sesión, mostramos su nombre
                    $nombreUsu = $_SESSION["nombreUsu"];
                ?>
                    <div class="text-end" id="loggedUserContainer">
                        <span class="text-white me-2">¡Hola, <?php echo $nombreUsu; ?>!</span>
                        <a href="../iniciosesion/cerrar_sesion.php" class="btn btn-danger">Cerrar sesión</a>
                    </div>
                <?php
                } else {
                    // Si el usuario no ha iniciado sesión, mostramos los botones de login y sign-up como lo hacías anteriormente
                ?>
                    <div class="text-end" id="loginSignupContainer">
                        <button type="button" class="btn btn-outline-light me-2">Login</button>
                        <button type="button" class="btn btn-warning">Sign-up</button>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </header>

    <div class="Elige" style="text-align: center; margin-top: 100px;">
    <h2 class="elige">Mira los apuntes que quieras</h2>
    <h2 class="h2peque" style="font-size: small;">En ApuntesUax, encontraras todos los apuntes de tus asignaturas favoritas o no tan favoritas</h2>
    </div>
    
    <div class="caja">
        <label for="menu"><strong>Grados Superiores</strong></label>
        <select id="menu" size="15">
            <option value="../FP/fp.php">Acondicionamiento Físico y Certificado de Entrenador</option>
            <option value="../FP/fp.php">Administración de Sistemas Informáticos en Red</option>
            <option value="../FP/fp.php">Administración y Finanzas</option>
            <option value="../FP/fp.php">Animaciones 3D, Juegos y entornos interactivos</option>
            <option value="../FP/fp.php">Automatización y Robótica Industrial</option>
            <option value="../FP/fp.php">Audiología Protésica</option>
            <option value="../FP/fp.php">Desarrollo de Aplicaciones Multiplacaciones</option>
            <option value="../FP/fp.php">Dirección de Cocina</option>
            <option value="../FP/fp.php">Documentación y Administración Sanitarias</option>
            <option value="../FP/fp.php">Educación Infantil</option>
            <option value="../FP/fp.php">Higiene Bucodental</option>
            <option value="../FP/fp.php">Laboratorio de Análisis y Control de Calidad</option>
            <option value="../FP/fp.php">Marketing y publicidad</option>
            <option value="../FP/fp.php">Transporte y Logística</option>                                      
        </select>
    </div>
    
    <main class="flex-grow-1 overflow-auto blur-on-scroll" style="margin-bottom: 100px; margin-top: 60px; margin-left:100px; margin-right: 100px; ">
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <div class="col"style="margin-left: 1%;width: 100%;margin-right: 1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Diseño sin título (1).png" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico superior de Desarrollo de Aplicaciones Multiplataforma</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col"style="margin-left: 5%;width: 26%;margin-right: 1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior Online en Animaciones 3D, Juegos y entornos interactivos</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col" style="margin-left: 5%; width: 26%;margin-right:1% ">
                    <a href="../FP/fp.php" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Técnico Superior Online en Administración y Finanzas</center></p>
                                <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col"style="margin-left: 5%; width: 26%; margin-right:1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior Online en Educación Infantil</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col"style="margin-left: 5%;width: 26%;margin-right: 1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior Online en Automatización y Robótica Industrial</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col" style="margin-left: 5%; width: 26%;margin-right:1% ">
                    <a href="../FP/fp.php" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Técnico Superior Online en Administración de Sistemas Informáticos en Red</center></p>
                                <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col"style="margin-left: 5%; width: 26%; margin-right:1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior Online en Administración de Sistemas Informáticos en Red</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col"style="margin-left: 5%;width: 26%;margin-right: 1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior Online en Animaciones 3D, Juegos y entornos interactivos</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col" style="margin-left: 5%; width: 26%;margin-right:1% ">
                    <a href="../FP/fp.php" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Técnico Superior en Administración de Sistemas Informáticos en Red</center></p>
                                <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col"style="margin-left: 5%; width: 26%; margin-right:1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior en Acondicionamiento Físico</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col"style="margin-left: 5%;width: 26%;margin-right: 1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior Online en Desarrollo de Aplicaciones Web</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col" style="margin-left: 5%; width: 26%;margin-right:1% ">
                    <a href="../FP/fp.php" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Técnico Superior Online en Marketing y Publicidad</center></p>
                                <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col"style="margin-left: 5%; width: 26%; margin-right:1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior Online en Imagen para el Diagnóstico y Medicina Nuclear</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col"style="margin-left: 5%;width: 26%;margin-right: 1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior Online en Audiología Protésica</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col" style="margin-left: 5%; width: 26%;margin-right:1% ">
                    <a href="../FP/fp.php" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Técnico Superior en Administración y Finanzas</center></p>
                                <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col"style="margin-left: 5%; width: 26%; margin-right:1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior en Acondicionamiento Físico y Certificado de Entrenador</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col"style="margin-left: 5%;width: 26%;margin-right: 1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior en Marketing y Publicidad</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col" style="margin-left: 5%; width: 26%;margin-right:1% ">
                    <a href="../FP/fp.php" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Técnico Superior Online en Higiene Bucodental</center></p>
                                <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col"style="margin-left: 5%; width: 26%; margin-right:1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior Online en Documentación y Administración Sanitarias</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col"style="margin-left: 5%;width: 26%;margin-right: 1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior Online en Laboratorio de Análisis y Control de Calidad</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col" style="margin-left: 5%; width: 26%;margin-right:1% ">
                    <a href="../FP/fp.php" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Técnico Superior Online en Dirección de Cocina</center></p>
                                <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col"style="margin-left: 5%; width: 26%; margin-right:1%">
                    <a href="../FP/fp.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Técnico Superior Online en Transporte y Logística</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

    

    <footer class="custom-footer mt-auto">
        <p>&copy; 2024 Mi Página Web</p>
        <p>Contacto: infoapuntesuax@gmail.com</p>
        <p>Email: <EMAIL></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function ()) {
                var loginSignupContainer = document.getElementById('loginSignupContainer');
                var footer = document.querySelector('.custom-footer');
                var mainContent = document.querySelector('main');
                var blurElem = document.querySelector('.blur-on-scroll');
    
                window.addEventListener('scroll', function () {
                    var scrollPosition = window.scrollY || window.pageYOffset || document.documentElement.scrollTop;
    
                    var totalHeight = mainContent.clientHeight;
    
                    var visibleHeight = window.innerHeight;
    
                    if (scrollPosition + visibleHeight >= totalHeight) {
                        footer.style.display = 'block'; // Muestra el footer
                    } else {
                        footer.style.display = 'none'; // Oculta el footer
                    }
    
                    // Agrega o quita la clase de desenfoque según el scroll
                    if (scrollPosition > 100) {
                        blurElem.classList.add('blurred');
                    } else {
                        blurElem.classList.remove('blurred');
                    }
                });
    
                // Agregar evento de clic al contenedor
            }
        
            
                loginSignupContainer.addEventListener('click', function(event) {
                    if (event.target.tagName == 'BUTTON') {
                        var buttonText = event.target.innerText.toLowerCase().trim();
                        if (buttonText == 'login') {
                            window.location.href = '../iniciosesion/login.php';
                        } else if (buttonText == 'sign-up') {
                            window.location.href = '../iniciosesion/sign_up.php';
                        }
                    }
                });
            
        </script>

</body>
</html>
