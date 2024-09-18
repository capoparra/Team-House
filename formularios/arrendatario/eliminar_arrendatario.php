<?php

// Verificar si se recibió la cédula del arrendatario a eliminar
if (!isset($_GET['id'])) {
    die("No se proporcionó la cédula del arrendatario a eliminar.");
}

// Obtener la cédula del arrendatario a eliminar desde la URL
$cedula = $_GET['id'];

// Incluir el archivo de conexión a la base de datos
include '../../conexion db/conexion.php';

// Consultar si el arrendatario existe antes de eliminarlo
$sel = $conn->query("SELECT * FROM tbl_arrendatario WHERE cedula = '$cedula'");
$arrendatario = $sel->fetch_assoc();

// Verificar si se encontró el arrendatario con la cédula especificada
if (!$arrendatario) {
    die("No se encontró ningún arrendatario con la cédula: $cedula");
}

// Consulta de eliminación
$del = $con->query("DELETE FROM tbl_arrendatario WHERE cedula = '$cedula'");

// Verificar si se ejecutó la consulta de eliminación 
if ($del) {
    echo "<h1>Arrendatario eliminado exitosamente.</h1>";
} else {
    echo "<h1>Error al eliminar el arrendatario: " . $error_message . "</h1>";
}

// Enlace para volver a la lista de arrendatarios
echo "<a href='mostrar_arrendatarios.php'>Volver a la lista de arrendatarios</a>";

