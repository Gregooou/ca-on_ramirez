<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/Carreras.css">
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
        <label for="menu"><strong>Seleccione una carrera:</strong></label>
        <select id="menu" size="15">
            <option value="">ADE</option>
            <option value="admin_direccion_empresas_relaciones_internacionales">ADE + Relaciones Internacionales</option>
            <option value="admin_direccion_empresas_marketing">ADE + Marketing</option>
            <option value="arquitectura">Arquitectura</option>
            <option value="biomedicina">Biomedicina</option>
            <option value="business_analytics">Business Analytics</option>
            <option value="business_analytics_ade">Business Analytics + ADE</option>
            <option value="derecho">Derecho</option>
            <option value="derecho_relaciones_internacionales">Derecho + Relaciones Internacionales</option>
            <option value="farmacia">Farmacia + Certificado en Dirección Estratégica y Gerencia de Oficina de Farmacia: Farmacia Digital</option>
            <option value="farmacia_nutricion">Farmacia + Nutrición Humana y Dietética</option>
            <option value="farmacia_semipresencial">Semipresencial en Farmacia</option>
            <option value="fisica">Física</option>
            <option value="fisioterapia">Fisioterapia</option>
            <option value="ingenieria_aeroespacial">Ingeniería Aeroespacial</option>
            <option value="ingenieria_biomédica">Ingeniería Biomédica</option>
            <option value="ingenieria_civil_construcciones_civiles">Ingeniería Civil en Construcciones Civiles</option>
            <option value="ingenieria_diseño_industrial_desarrollo_producto">Ingeniería en Diseño Industrial y Desarrollo de Producto</option>
            <option value="ingenieria_diseño_industrial_desarrollo_producto_mecanica">Ingeniería en Diseño Industrial y Desarrollo de Producto + Ingeniería Mecánica</option>
            <option value="ingenieria_electronica_industrial_automatica">Ingeniería Electrónica Industrial y Automática</option>
            <option value="ingenieria_informatica">Ingeniería Informática</option>
            <option value="ingenieria_informatica_ade">Ingeniería Informática + Administración y Dirección de Empresas</option>
            <option value="ingenieria_informatica_bootcamp_ironhack">Online en Ingeniería Informática + Bootcamp Ironhack</option>
            <option value="ingenieria_mecanica">Ingeniería Mecánica</option>
            <option value="ingenieria_matematica">Ingeniería Matemática</option>
            <option value="interpretacion_musical">Interpretación Musical</option>
            <option value="interpretacion_musica_moderna">Interpretación de Música Moderna</option>
            <option value="marketing">Marketing</option>
            <option value="marketing_online">Marketing Online</option>
            <option value="maestro_educacion_primaria">Online en Maestro de Educación Primaria</option>
            <option value="musicologia">Online en Musicología</option>
            <option value="nutricion_humana_dietetica">Nutrición Humana y Dietética</option>
            <option value="nutricion_humana_dietetica_semipresencial">Semipresencial en Nutrición Humana y Dietética</option>
            <option value="odontologia">Odontología</option>
            <option value="psicologia">Psicología</option>
            <option value="psicologia_online">Online en Psicología</option>
            <option value="relaciones_internacionales">Relaciones Internacionales</option>
            <option value="sistemas_industriales">Ingeniería de Sistemas Industriales</option>
            <option value="veterinaria">Veterinaria</option>
        </select>
    </div>

    <main class="flex-grow-1 overflow-auto blur-on-scroll" style="margin-bottom: 100px; margin-top: 60px; margin-left:100px; margin-right: 100px; ">
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <div class="col"style="margin-left: 1%;width: 100%;margin-right: 1%">
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/DAM.png" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Enfermería+Diploma de Experto en Urgencias, Emergencias y Cuidados Críticos.</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Ingeniería de Sistemas Industriales</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Farmacia+Certificado en Dirección Estratégica y Gerencia de Oficina de Farmacia:Farmacia Digital.</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Biotecnología</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Ciencias de la Actividad Física y del Deporte(CAFYD)+Grado en Nutrición Humana y Dietética</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Ciencias de la Actividad Física y del Deporte (CAFYD)+Grado en Fisioterapia</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Marketing.</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center> Grado en Ciencias de la Actividad Física y del Deporte(CAFYD)</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Ingeniería Informática</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Administracíon y Dirección de Empresas</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Odontología</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Medicina</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Veterinaria</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado de Biomedicina.</center></p>
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
                    <a href="../Carreras/carreras.php" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Nutrición Humana y Dietética</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Fisioterapia</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Ingeniería Civil en Construcciones Civiles</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grados en Business Analytics</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Inteligencia Artificial y Computación.</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen Izquierda" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center> Grado en Ingeniería </center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Informática+Administración y Dirección de Empresas</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Marketing Online</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz1.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Ingeniería Matemáticas</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz2.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Física</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz3.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Psicología</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Doble Grado en Business Analytics+Grado en Administración y Dirección de Empresas</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Administración y Dirección de Empresas+Marketing</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Doble Grado en Ingeniería Informatica</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz1.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Derecho+Relaciones Internacionales</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz2.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Doble grado en ADE+Derecho</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz3.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Derecho</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Administración y Dirección de empresas+Grado en Relaciones Internacionales</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz2.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Ingeniería Biomédica </center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz3.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Farmacia+Grado en Nutrición Humana y Dietética</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado online en Psicología</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado Online en Inteligencia Artificial y Computación</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado Semipresencial en Nutrición Humana y Dietética</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz1.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Ingeniería en Diseño Industrial y Desarrollo de Producto</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz2.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Interpretación Musica</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz3.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Interpretación de Musica Moderna</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Ingeniería Aeroespacial</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Ingeniería Mecánica</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado Online en Maestro de Educación Primaria</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz1.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado en Ingeniería en Diseño Industrial y Desarrollo de Producto+Ingeniería Mecánica</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz2.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado Semipresencial en Farmacia</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz3.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado Online en Administración y Dirección de Empresas</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz1.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado Online en Musicología</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz2.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado Online en Educación Infantil</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz3.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado Online en Derecho</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz1.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Grado Online en Ingeniería Informática+Bootcamp Ironhack.</center></p>
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
                    <a href="../Carreras/carreras.html" class="card-link">
                    <div class="card shadow-sm">
                        <img src="../img/Feliz2.jpg" alt="Imagen derecha" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <div class="card-body">
                            <p class="card-text"><center>Grado en Arquitectura.</center></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div><div class="col" style="margin-left: 5%; width: 26%;margin-right:1% ">
                    <a href="../Carreras/carreras.html" class="card-link">
                        <div class="card shadow-sm">
                            <img src="../img/Feliz3.jpg" alt="Imagen medio" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text"><center>Menciones del Grado Online en Maestros de Educación Primaria</center></p>
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
            document.addEventListener("DOMContentLoaded", function () {
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
                loginSignupContainer.addEventListener('click', function(event) {
                    // Verificar si el clic ocurrió en un botón dentro del contenedor
                    if (event.target.tagName === 'BUTTON') {
                        // Obtener el texto del botón y redirigir según sea necesario
                        var buttonText = event.target.innerText.toLowerCase().trim();
                        if (buttonText === 'login') {
                            window.location.href = '../iniciosesion/login.html';
                        } else if (buttonText === 'sign-up') {
                            window.location.href = '../iniciosesion/sign_up.html';
                        }
                    }
                });
            });
        </script>

</body>
</html>
