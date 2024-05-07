<?php
// Verificar si se ha iniciado sesión
session_start();
if (!isset($_SESSION['usuarioID'])) {
    // Si no se ha iniciado sesión, redirigir al usuario a la página de inicio de sesión
    header("Location: ../iniciosesion/login.php");
    exit();
}

// Obtener el ID del usuario de la sesión
$usuarioID = $_SESSION['usuarioID'];

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha ingresado un nombre de usuario
    if (isset($_POST["nombre_usuario"]) && !empty($_POST["nombre_usuario"])) {
        // Guardar el nombre de usuario
        $nombreUsuario = $_POST["nombre_usuario"];

        // Verificar si se ha cargado un archivo
        if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] == UPLOAD_ERR_OK) {
            // Guardar información del archivo
            $nombreArchivo = $_FILES["archivo"]["name"];
            $tempArchivo = $_FILES["archivo"]["tmp_name"];

            // Definir el directorio de destino para cargar archivos
            $directorioDestino = "C:/xampp/htdocs/uploadapuntesUAX/";

            // Generar un nombre de archivo único
            $nombreArchivoUnico = uniqid() . "_" . $nombreArchivo;

            // Guardar el archivo en el directorio de destino
            $rutaArchivo = $directorioDestino . $nombreArchivoUnico;
            if (move_uploaded_file($tempArchivo, $rutaArchivo)) {
                // Verificar si se ha seleccionado un programa
                if (isset($_POST["programa"]) && !empty($_POST["programa"])) {
                    // Guardar el programa seleccionado
                    $programa = $_POST["nombreProg"];

                    // Verificar si se ha ingresado un nombre de estudio
                    if (isset($_POST["tipoestudio"]) && !empty($_POST["tipoestudio"])) {
                        // Guardar el nombre del estudio
                        $nombreEstudio = $_POST["tipoestudio"];

                        // Conectar a la base de datos
                        $servidor = "localhost";
                        $usuario = "ADMINPM";
                        $contraseña = "Pr0yect0#Interm0dul4r";
                        $base_de_datos = "intermodular_definitivo2";

                        $conexion = new mysqli($servidor, $usuario, $contraseña, $base_de_datos);

                        // Verificar conexión
                        if (mysqli_connect_errno()) {
                            echo "Error en la conexión a MySQL: " . mysqli_connect_error();
                            exit();
                        }

                        // Consulta SQL para insertar el registro en la base de datos
                        $sql = "INSERT INTO documentos (usuarioID, nombre_usuario, ruta, programa, nombre_estudio) VALUES (?, ?, ?, ?, ?)";

                        // Preparar la consulta
                        $statement = $conexion->prepare($sql);

                        // Verificar si la preparación de la consulta fue exitosa
                        if ($statement) {
                            // Enlazar los parámetros
                            $statement->bind_param("issss", $usuarioID, $nombreUsuario, $rutaArchivo, $programa, $nombreEstudio);

                            // Ejecutar la consulta
                            if ($statement->execute()) {
                                echo "El archivo se ha subido y registrado correctamente.";
                            } else {
                                echo "Error al ejecutar la consulta: " . $statement->error;
                            }

                            // Cerrar la consulta
                            $statement->close();
                        } else {
                            echo "Error en la preparación de la consulta: " . $conexion->error;
                        }

                        // Cerrar conexión
                        $conexion->close();
                    } else {
                        echo "Por favor, ingrese el nombre del estudio.";
                    }
                } else {
                    echo "Por favor, seleccione un programa.";
                }
            } else {
                echo "Error al mover el archivo al directorio de destino.";
            }
        } else {
            echo "Por favor, seleccione un archivo.";
        }
    } else {
        echo "Por favor, ingrese el nombre de usuario.";
    }
}
?>

