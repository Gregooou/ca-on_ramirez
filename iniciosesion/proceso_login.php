<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servidor = "localhost";
$usuario = "ADMINPM";
$contraseña = "Pr0yect0#Interm0dul4r";
$base_de_datos = "intermodular definitivo2";
$conexion = new mysqli($servidor, $usuario, $contraseña, $base_de_datos);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreUsu = $_POST["Username"];
    $contraseña = $_POST["Password"];

    // Consulta preparada para evitar inyección SQL
    $consulta = $conexion->prepare("SELECT contraseña_cifrada FROM usuario WHERE nombreUsu = ?");
if ($consulta) {
    $consulta->bind_param("s", $nombreUsu);
    if ($consulta->execute()) {
        $resultado = $consulta->get_result();
        if ($resultado->num_rows == 1) {
            $fila = $resultado->fetch_assoc();
            $contraseña_almacenada = $fila["contraseña_cifrada"];

            // Verificar si la contraseña proporcionada coincide con la contraseña almacenada (sin cifrar)
            if ($contraseña === $contraseña_almacenada) {
                // Inicio de sesión exitoso, redirigir al usuario a una página interna
                session_start();
                $_SESSION["nombreUsu"] = $nombreUsu;
                header("Location: ../Index.php");
                exit();
            } else {
                // Contraseña incorrecta, redirigir de vuelta al formulario de inicio de sesión
                session_start();
                $_SESSION["error"] = "Nombre de usuario o contraseña incorrectos.";
                header("Location: login.php");
                exit();
            }
        } else {
            // Nombre de usuario no encontrado en la base de datos
            session_start();
            $_SESSION["error"] = "Nombre de usuario o contraseña incorrectos.";
            header("Location: login.php");
            exit();
        }
    } else {
        // Error al ejecutar la consulta
        echo "Error al ejecutar la consulta: " . $conexion->error;
    }
} else {
    // Error al preparar la consulta
    echo "Error al preparar la consulta: " . $conexion->error;
}
}
?>