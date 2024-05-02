<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos de Usuarios</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<header class="p-3 custom-bg-color text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <a href="../Index.php" class="navbar-brand d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="../img/apuntes.jpg" width="150" height="40" class="me-2" alt="Logo">
            </a>
            <form id="searchForm" class="col-12 col-lg-auto mb-3 mb-lg-0 ms-lg-auto me-lg-3">
                <input type="search" id="searchInput" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
            <div id="searchResults"></div>
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
<h1>Archivos de Usuarios</h1>
<!-- Botón para abrir el menú desplegable de asignatura y grado -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Subir archivo
</button>

<!-- Modal para seleccionar asignatura y grado -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subir Archivo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
            <label for="fileInput" class="form-label">Selecciona un archivo:</label>
            <input type="file" class="form-control" id="fileInput" name="file">
        </div>
        <div class="mb-3">
            <label for="asignaturaSelect" class="form-label">Asignatura:</label>
            <select class="form-select" id="asignaturaSelect" name="asignatura">
                <option selected disabled>Selecciona una asignatura</option>
                <option value="Matemáticas">Matemáticas</option>
                <option value="Ciencias">Ciencias</option>
                <option value="Historia">Historia</option>
                <!-- Agrega más opciones según tus necesidades -->
            </select>
        </div>
        <div class="mb-3">
            <label for="gradoSelect" class="form-label">Grado:</label>
            <select class="form-select" id="gradoSelect" name="grado">
                <option selected disabled>Selecciona un grado</option>
                <option value="Primero">Primero</option>
                <option value="Segundo">Segundo</option>
                <option value="Tercero">Tercero</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="gradoSelect" class="form-label">Grado:</label>
            <select class="form-select" id="gradoSelect" name="grado">
                <option selected disabled>Selecciona un grado</option>
                <option value="Primero">Primero</option>
                <option value="Segundo">Segundo</option>
                <option value="Tercero">Tercero</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="submitBtn">Subir</button>
      </div>
    </div>
  </div>
</div>

<table border="1">
    <thead>
    <tr>
        <th>Nombre de Usuario</th>
        <th>Asignatura</th>
        <th>Tema</th>
        <th>Archivo</th>
    </tr>
    </thead>
    <tbody>
    <?php
    // El resto del código PHP para mostrar los archivos en la tabla permanece igual
    ?>
    </tbody>
</table>
<footer class="custom-footer mt-auto">
    <p>&copy; 2024 Mi Página Web</p>
    <p>Contacto: infoapuntesuax@gmail.com</p>
    <p>Email: <EMAIL></p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchForm').submit(function(event) {
            event.preventDefault(); // Evitar que el formulario se envíe de manera tradicional

            // Obtener el término de búsqueda ingresado por el usuario
            var searchTerm = $('#searchInput').val();

            // Enviar el término de búsqueda al script PHP utilizando AJAX
            $.ajax({
                type: 'POST',
                url: 'buscar.php', // Ruta al script PHP que maneja la búsqueda
                data: { searchTerm: searchTerm }, // Datos a enviar al script PHP
                success: function(response) {
                    // Mostrar los resultados de la búsqueda en el contenedor de resultados
                    $('#searchResults').html(response);
                }
            });
        });

        // Manejar clic en el botón de subir archivo
        $('#submitBtn').click(function() {
            // Obtener los datos del formulario
            var file = $('#fileInput').prop('files')[0];
            var asignatura = $('#asignaturaSelect').val();
            var grado = $('#gradoSelect').val();

            // Aquí puedes realizar las acciones necesarias con los datos (enviar a servidor, etc.)
            // Por ahora, simplemente imprimo los datos en la consola
            console.log('Archivo seleccionado:', file);
            console.log('Asignatura seleccionada:', asignatura);
            console.log('Grado seleccionado:', grado);

            // Puedes agregar aquí la lógica para enviar los datos al servidor a través de AJAX
        });
    });
</script>
</body>
</html>
