<?php
include '../conexion db/conexion.php';

// Verificar si se ha enviado una solicitud POST para eliminar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el identificador del admon ph  a eliminar
    $num_identificacion = $_POST['id'] ?? null;

    if ($num_identificacion) {
        // Preparar la consulta para eliminar el registro
        $stmt = $conn->prepare("DELETE FROM tbl_admon_ph WHERE codigo = ?");

        if ($stmt === false) {
            die("Error al preparar la consulta: $conn->error");
        }

        // Enlazar el parámetro
        $stmt->bind_param("s", $codigo);

        // Ejecutar la consulta
        if ($stmt->execute()) {                            
            header("Location: admon_ph_activo.php?delete=success");
            exit();            
        } else {
            echo "Error al eliminar el admon ph: " . $stmt->error;
        }
  
        $stmt->close();
        $conn->close();

    } else {
        echo "Identificador de admon ph no proporcionado.";
    }
}

// En caso de que se acceda al archivo directamente sin POST
else {
    die("Solicitud no válida.");
}

