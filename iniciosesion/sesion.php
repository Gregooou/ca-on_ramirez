<?php
$servidor = "localhost";
$usuario = "ADMINPM";
$contraseña = "Pr0yect0#Interm0dul4r";
$base_de_datos = "intermodular definitivo2";

$conexion = new mysqli($servidor, $usuario, $contraseña, $base_de_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verificar si se han enviado datos a través del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombreUsu = $_POST["Username"];
    $contraseña_cifrada = $_POST["Password"];
    $correoUsu = $_POST["Email"];
    
    //Ciframos contraseña

    
    // Obtener el número total de registros en la tabla usuario
    $resultado_total = $conexion->query("SELECT COUNT(*) AS total_registros FROM usuario");
    $fila_total = $resultado_total->fetch_assoc();
    $total_registros = $fila_total["total_registros"];
    
    // Calcular el nuevo ID sumando 1 al total de registros
    $nuevo_id = $total_registros + 1;

    // Crear la consulta SQL para insertar los datos en la base de datos
    $consulta = "INSERT INTO usuario (usuarioID, nombreUsu, contraseña_cifrada, correoUsu) VALUES ('$nuevo_id', '$nombreUsu', '$contraseña_cifrada', '$correoUsu')";

    // Ejecutar la consulta
    if ($conexion->query($consulta) === TRUE) {
        // Redirigir después de una inserción exitosa
        header("Location: ../Index.php");
        exit();
    } else {
        // Mostrar un mensaje de error
        echo "Ha ocurrido un error al insertar el registro.";
        // Si no rediriges, sería mejor no enviar ningún texto adicional al navegador aquí
    }
}

?>