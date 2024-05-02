<?php
// Conectar a la base de datos (debes reemplazar 'host', 'usuario', 'contraseña' y 'nombre_base_de_datos' con tus propios datos)
$servidor = "localhost";
$usuario = "ADMINPM";
$contraseña = "Pr0yect0#Interm0dul4r";
$base_de_datos = "intermodular definitivo2";
$conexion = new mysqli($servidor, $usuario, $contraseña, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Obtener el término de búsqueda ingresado por el usuario
$searchTerm = $conexion->real_escape_string($_POST['searchTerm']);

// Realizar la búsqueda en todas las tablas relevantes y en la tabla 'documentos'
$resultados = buscarEnTodasLasTablas($conexion, $searchTerm);

// Construir los resultados de la búsqueda
$searchResults = '<h2>Resultados de la búsqueda:</h2>';

// Agregar los resultados de cada tabla a los resultados de búsqueda
foreach ($resultados as $tabla => $resultadosTabla) {
    $searchResults .= "<h3>$tabla</h3>";
    $searchResults .= construirListaResultados($resultadosTabla);
}

// Devolver los resultados de la búsqueda
echo $searchResults;

// Función para buscar en todas las tablas relevantes
function buscarEnTodasLasTablas($conexion, $searchTerm) {
    $resultados = array();

    // Realizar la búsqueda en la tabla 'programas'
    $resultados['programas'] = buscarEnTabla($conexion, 'programas', $searchTerm);

    // Realizar la búsqueda en la tabla 'documentos'
    $resultados['documentos'] = buscarEnDocumentos($conexion, $searchTerm);

    // Puedes agregar más tablas aquí según sea necesario

    return $resultados;
}

// Función para buscar en una tabla específica
function buscarEnTabla($conexion, $tabla, $searchTerm) {
    // Construir la consulta SQL
    $sql = "SELECT * FROM $tabla WHERE asignatura LIKE '%$searchTerm%' OR tema LIKE '%$searchTerm%'";

    // Ejecutar la consulta
    $resultado = $conexion->query($sql);

    // Verificar si se encontraron resultados
    if ($resultado && $resultado->num_rows > 0) {
        // Retornar los resultados como un array asociativo
        return $resultado->fetch_all(MYSQLI_ASSOC);
    } else {
        // Retornar un array vacío si no se encontraron resultados
        return array();
    }
}

// Función para buscar en la tabla 'documentos'
function buscarEnDocumentos($conexion, $searchTerm) {
    // Construir la consulta SQL
    $sql = "SELECT * FROM documentos WHERE asignatura LIKE '%$searchTerm%' OR tema LIKE '%$searchTerm%' OR nombreUsuario LIKE '%$searchTerm%'";

    // Ejecutar la consulta
    $resultado = $conexion->query($sql);

    // Verificar si se encontraron resultados
    if ($resultado && $resultado->num_rows > 0) {
        // Retornar los resultados como un array asociativo
        return $resultado->fetch_all(MYSQLI_ASSOC);
    } else {
        // Retornar un array vacío si no se encontraron resultados
        return array();
    }
}

// Función para construir una lista HTML con los resultados obtenidos
function construirListaResultados($results) {
    // Inicializar la variable para almacenar el HTML de la lista de resultados
    $html = '<ul>';

    // Iterar sobre los resultados y construir cada elemento de la lista
    foreach ($results as $resultado) {
        $html .= '<li>' . $resultado['nombre'] . '</li>'; // Suponiendo que 'nombre' es un campo común en los resultados
    }

    // Cerrar la lista
    $html .= '</ul>';

    // Retornar el HTML de la lista de resultados
    return $html;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
