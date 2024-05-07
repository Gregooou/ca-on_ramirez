<?php
// Conectar a la base de datos (debes reemplazar 'host', 'usuario', 'contraseña' y 'nombre_base_de_datos' con tus propios datos)
$servidor = "localhost";
$usuario = "ADMINPM";
$contraseña = "Pr0yect0#Interm0dul4r";
$base_de_datos = "intermodular definitivo2";
$conexion = new mysqli($servidor, $usuario, $contraseña, $base_de_datos);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Verificar si se envió el término de búsqueda desde el formulario
if(isset($_POST['terminoBusqueda'])) {
    // Obtener el término de búsqueda enviado desde el formulario
    $terminoBusqueda = $_POST['terminoBusqueda'];

    // Realizar la consulta SQL para buscar en la base de datos
    $query = "SELECT * FROM programas 
              WHERE nombreProg LIKE '%$terminoBusqueda%' 
              UNION
              SELECT * FROM tipo_estudio 
              WHERE tipoestudio LIKE '%$terminoBusqueda%'";

    // Ejecutar la consulta y obtener los resultados
    $resultado = $conexion->query($query);

    // Crear un arreglo para almacenar los resultados
    $resultados = array();

    // Recorrer los resultados y almacenarlos en el arreglo
    while ($row = $resultado->fetch_assoc()) {
        $resultados[] = $row;
    }

    // Devolver los resultados como JSON
    echo json_encode($resultados);
} else {
    echo "No se envió el término de búsqueda desde el formulario.";
}
?>
