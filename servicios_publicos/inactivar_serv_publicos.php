<?php
include '../conexion db/conexion.php';

// Verifica si se recibió el ID del servicio publico 
if (isset($_POST['id'])) {
    $id = $_POST['id']; // El ID del trabajador capturado en el form de inactivar

    // Inactivar registro 
    $fecha_inactivacion = date('Y-m-d');
    $estado = 0; // Estado inactivo

    // Consulta SQL para actualizar
    $sql = "UPDATE tbl_serv_publicos SET estado_serv_publicos = ?, fecha_inactivacion = ? WHERE codigo = ?";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Vincular parámetros
        $stmt->bind_param("isi", $estado, $fecha_inactivacion, $id);

        // Ejecutar la consulta
        if ($stmt->execute()) {            
            header("Location: serv_publicos.php?update=inactivate_success&id=$codigo");           
        } else {            
            header("Location: serv_publicos.php?update=inactivate_error&id=$codigo");               
        }        
    } else {
        // Error al preparar la consulta
        header("Location: serv_publicos.php?update=error");
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    // Redirigir a la página del servicio si no se envió el ID
    header("Location: serv_publicos.php");
    exit();
}



