<?php
include '../conexion db/conexion.php';

// Verificar si se ha enviado una solicitud POST para eliminar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el identificador del servicio inmobiliaria   a eliminar
    $num_identificacion = $_POST['id'] ?? null;

    if ($num_identificacion) {
        // Preparar la consulta para eliminar el registro
        $stmt = $conn->prepare("DELETE FROM tbl_serv_inm WHERE inmub_codigo = ? and serv_codigo = ?");

        if ($stmt === false) {
            die("Error al preparar la consulta: $conn->error");
        }

        // Enlazar el parámetro
        $stmt->bind_param("s", $codigo);

        // Ejecutar la consulta
        if ($stmt->execute()) {                            
            header("Location: serv_inm_activo.php?delete=success");
            exit();            
        } else {
            echo "Error al eliminar el servicio inmobiliaria: " . $stmt->error;
        }
  
        $stmt->close();
        $conn->close();

    } else {
        echo "Identificador del servicio publico no proporcionado.";
    }
}

// En caso de que se acceda al archivo directamente sin POST
else {
    die("Solicitud no válida.");
}

<?php
include '../conexion db/conexion.php';

// Verificar si se ha enviado una solicitud POST para eliminar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el identificador del servicio publico  a eliminar
    $num_identificacion = $_POST['id'] ?? null;

    if ($num_identificacion) {
        // Preparar la consulta para eliminar el registro
        $stmt = $conn->prepare("DELETE FROM tbl_serv_inm WHERE inmub_codigo = ? and serv_codigo = ?" );

        if ($stmt === false) {
            die("Error al preparar la consulta: $conn->error");
        }

        // Enlazar el parámetro
        $stmt->bind_param("s", $codigo);

        // Ejecutar la consulta
        if ($stmt->execute()) {                            
            header("Location: serv_inm_activo.php?delete=success");
            exit();            
        } else {
            echo "Error al eliminar el servicio de inmobiliaria: " . $stmt->error;
        }
  
        $stmt->close();
        $conn->close();

    } else {
        echo "Identificador del servicio publico no proporcionado.";
    }
}

// En caso de que se acceda al archivo directamente sin POST
else {
    die("Solicitud no válida.");
}

