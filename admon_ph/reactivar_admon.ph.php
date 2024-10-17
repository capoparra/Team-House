<?php
include '../conexion db/conexion.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Definir los valores nuevos 
    $estado = 1; // Estado activo
    $fecha_inactivacion = NULL; 

    // Consulta actualizar estado y fecha de inactivación
    $sql = "UPDATE tbl_serv_publicos SET estado_serv = ?, fecha_inactivacion = ? WHERE codigo = ?";
    
    // Preparar la consulta
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $estado, $fecha_inactivacion, $id);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Redirigir a la página de listado con un mensaje de éxito
        header("Location: serv_publicos_activo.php?update=reactivate_success");
        exit();
    } else {
        // Mostrar mensaje de error y redirigir
        echo "Hubo un error al Reactivar el el servicio publico";
        header("Location: serv_publicos_inactivo.php?update=reactivate_error");                
    }
        
    $stmt->close();
    $conn->close();

} else {
    // Si no se ha enviado el formulario, redirigir a la página de listado
    header("Location: serv_publicos_inactivo.php");
    exit();
}


