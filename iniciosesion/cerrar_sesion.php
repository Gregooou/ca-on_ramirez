<?php
// Inicia la sesión si no está iniciada
session_start();

// Destruye la sesión actual
session_destroy();

// Redirige al usuario a la página principal
header("Location: ../Index.php");
exit();
?>
