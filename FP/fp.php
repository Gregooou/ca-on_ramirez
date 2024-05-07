<<<<<<< HEAD
<?php
// Conexión a la base de datos
$servidor = "localhost";
$usuario = "ADMINPM";
$contraseña = "Pr0yect0#Interm0dul4r";
$base_de_datos = "intermodular definitivo2";

$conexion = new mysqli($servidor, $usuario, $contraseña, $base_de_datos);
// Verificar si se ha enviado una solicitud AJAX para obtener los programas según el tipo de estudio
if(isset($_POST['tipoEstudioID'])) {
    // Obtener el tipo de estudio seleccionado
    $tipoEstudioID = $_POST['tipoEstudioID'];
    
    // Realizar la consulta SQL para obtener los nombreProg según el tipo de estudio
    $query = "SELECT nombreProg FROM programas 
              WHERE tipoEstudioID IN (SELECT tipoEstudioID FROM tipo_estudio WHERE tipoestudio = ?)";

    // Preparar la consulta
    $statement = $conexion->prepare($query);

    // Verificar si la preparación de la consulta fue exitosa
    if($statement) {
        // Enlazar el parámetro tipoEstudioID a la consulta
        $statement->bind_param("s", $tipoEstudioID); // 's' indica que es una cadena de texto
        
        // Ejecutar la consulta
        $statement->execute();
        
        // Obtener el resultado de la consulta
        $result = $statement->get_result();
        
        // Crear un arreglo para almacenar los nombres de los programas
        $programas = array();
        
        // Recorrer los resultados y almacenar los nombres de los programas en el arreglo
        while($row = $result->fetch_assoc()) {
            $programas[] = $row['nombreProg'];
        }
        
        // Cerrar la consulta
        $statement->close();
        
        // Generar las opciones del segundo select basadas en los programas obtenidos
        $options = '';
        foreach($programas as $programa) {
            $options .= '<option value="' . $programa . '">' . $programa . '</option>';
        }
        
        // Enviar las opciones de vuelta como respuesta a la solicitud AJAX
        echo $options;
        exit; // Termina la ejecución del script después de enviar la respuesta
    } else {
        // Si hubo un error en la preparación de la consulta, muestra un mensaje de error
        echo "Error en la preparación de la consulta.";
    }
}
?>
=======
>>>>>>> f3f37c4592910e3cb2b2df36cc35f336c221a759
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
<<<<<<< HEAD
=======
<!-- Botón para abrir el menú desplegable de asignatura y grado -->
>>>>>>> f3f37c4592910e3cb2b2df36cc35f336c221a759
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
<<<<<<< HEAD
        <form action="subir.php" method="post" enctype="multipart/form-data">
            <label for="fileInput" class="form-label">Selecciona un archivo:</label>
            <input type="file" class="form-control" id="fileInput" name="file">
        </form>
        </div>
        <div class="mb-3">
            <label for="tipoEstudioSelect" class="form-label">Tipo de Estudio:</label>
            <select class="form-select" id="tipoEstudioSelect" name="tipoEstudio">
                <option selected disabled>Selecciona un tipo de estudio</option>
                <?php
                // Verificar la conexión
                if ($conexion->connect_error) {
                    die("Error en la conexión: " . $conexion->connect_error);
                }

                // Consulta para obtener los tipos de estudio
                $consulta = "SELECT DISTINCT tipoestudio FROM tipo_estudio";
                $resultados = $conexion->query($consulta);

                // Si hay resultados, generar las opciones del select
                if ($resultados->num_rows > 0) {
                    while ($fila = $resultados->fetch_assoc()) {
                        echo '<option value="' . $fila["tipoestudio"] . '">' . $fila["tipoestudio"] . '</option>';
                    }
                } else {
                    echo '<option value="">No hay tipos de estudio disponibles</option>';
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="nombreProgSelect" class="form-label">Nombre del Programa:</label>
            <select class="form-select" id="nombreProgSelect" name="nombreProg">
                <!-- Las opciones se cargarán dinámicamente mediante JavaScript -->
                <option selected disabled>Selecciona un programa</option>
            </select>
        </div>

    
=======
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
>>>>>>> f3f37c4592910e3cb2b2df36cc35f336c221a759
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
<<<<<<< HEAD
        // Manejar clic en el botón de subir archivo (mover el bloque de script aquí)
        $('#submitBtn').click(function() {
            // Obtener los datos del formulario
            var file = $('#fileInput').prop('files')[0];
            var tipoEstudio = $('#tipoEstudioSelect').val();
            var nombreProg = $('#nombreProgSelect').val();

            // Crear un objeto FormData para enviar el archivo y los datos del formulario
            var formData = new FormData();
            formData.append('archivo', file);
            formData.append('tipoEstudio', tipoEstudio);
            formData.append('nombreProg', nombreProg);

            $.ajax({
                type: 'POST',
                url: 'subir.php', // Ruta al script PHP que maneja la subida de archivos
                data: formData,
                processData: false, // Evitar que jQuery procese los datos
                contentType: false, // No establecer el tipo de contenido
                success: function(response) {
                    // Manejar la respuesta del servidor
                    console.log(response);
                    // Aquí puedes agregar código para mostrar un mensaje de éxito o error al usuario
                },
                error: function(xhr, status, error) {
                    // Manejar errores de AJAX
                    console.error(xhr.responseText);
                    // Aquí puedes agregar código para mostrar un mensaje de error al usuario
=======
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
>>>>>>> f3f37c4592910e3cb2b2df36cc35f336c221a759
                }
            });
        });

<<<<<<< HEAD
        // Código para cargar dinámicamente los programas basados en el tipo de estudio
        $('#tipoEstudioSelect').change(function() {
            var tipoEstudioID = $(this).val();
            $.ajax({
                type: 'POST',
                // No especificar URL ya que es el mismo archivo
                data: { tipoEstudioID: tipoEstudioID },
                success: function(response) {
                    $('#nombreProgSelect').html(response);
                }
            });
=======
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
>>>>>>> f3f37c4592910e3cb2b2df36cc35f336c221a759
        });
    });
</script>
</body>
</html>
