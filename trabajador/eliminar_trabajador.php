<?php
include '../conexion db/conexion.php';

// Verificar si se ha enviado una solicitud POST para eliminar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el identificador del trabajador  a eliminar
    $num_identificacion = $_POST['id'] ?? null;

    if ($num_identificacion) {
        // Preparar la consulta para eliminar el registro
        $stmt = $conn->prepare("DELETE FROM tbl_trabajador WHERE num_identificacion = ?");

        if ($stmt === false) {
            die("Error al preparar la consulta: $conn->error");
        }

        // Enlazar el parámetro
        $stmt->bind_param("s", $num_identificacion);

        // Ejecutar la consulta
        if ($stmt->execute()) {                            
            header("Location: trabajador_activo.php?delete=success");
            exit();            
        } else {
            echo "Error al eliminar el trabajador: " . $stmt->error;
        }
  
        $stmt->close();
        $conn->close();

    } else {
        echo "Identificador del trabajador no proporcionado.";
    }
}

// En caso de que se acceda al archivo directamente sin POST
else {
    die("Solicitud no válida.");
}

