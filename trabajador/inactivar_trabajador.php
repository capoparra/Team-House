<?php
include '../conexion db/conexion.php';

// Verifica si se recibió el ID del trabajador
if (isset($_POST['id'])) {
    $id = $_POST['id']; // El ID del trabajador capturado en el form de inactivar

    // Inactivar registro 
    $fecha_inactivacion = date('Y-m-d');
    $estado = 0; // Estado inactivo

    // Consulta SQL para actualizar
    $sql = "UPDATE tbl_trabajador SET estado_tra = ?, fecha_inactivacion = ? WHERE num_identificacion = ?";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Vincular parámetros
        $stmt->bind_param("isi", $estado, $fecha_inactivacion, $id);

        // Ejecutar la consulta
        if ($stmt->execute()) {            
            header("Location: trabajador_activo.php?update=inactivate_success&id=$num_identificacion");           
        } else {            
            header("Location: trabajador_activo.php?update=inactivate_error&id=$num_identificacion");               
        }        
    } else {
        // Error al preparar la consulta
        header("Location: trabajador_activo.php?update=error");
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    // Redirigir a la página de trabajador si no se envió el ID
    header("Location: trabajador_activo.php");
    exit();
}



