<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Arrendatario</title>
    
</head>

<body>

    <div class="container">
    <header>Team House</header>

<?php
include '../../conexion db/conexion.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {

    // Verificar si todos los datos están definidos (no estan vacíos)
    if (!empty($_POST['num_identificacion']) && !empty($_POST['tipo_identificacion']) && 
        !empty($_POST['nombre']) && !empty($_POST['apellido']) && 
        !empty($_POST['telefono']) && !empty($_POST['correo'])) {
        
        // Asignar los valores 
        $num_identificacion = $_POST['num_identificacion'];
        $tipo_identificacion = $_POST['tipo_identificacion'];
        $nombre = strtoupper($_POST['nombre']);
        $apellido = strtoupper ($_POST['apellido']);
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];        
        $estado = 1; // Definir el estado (1) como activo 

        // Preparar la consulta a SQL
        $stmt = $conn->prepare("INSERT INTO tbl_arrendatario (num_identificacion, tipo_identificacion, nombre, 
                                apellido, telefono, correo, estado_arr) VALUES (?, ?, ?, ?, ?, ?, ?)");
       
       if ($stmt === false) {
        die("Error al preparar la consulta: $conn->error");
        }

        // Enlazar los parámetros
        $stmt->bind_param("ssssssi", $num_identificacion, $tipo_identificacion, $nombre, $apellido, $telefono, 
                           $correo, $estado);

       
         // Ejecutar la consulta
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "El arrendatario ha sido registrado exitosamente.";
            } else {
                echo "La consulta se ejecutó, pero no se afectaron filas.";
            }
        } else {
            echo "Error al ejecutar la consulta: " . $stmt->error;
        }

        // Cerrar la declaración
        $stmt->close();

        // Cerrar la conexión a base de datos
        $conn->close();

    } else {
        echo "Por favor, complete todos los campos.";
    }
}

?>

<a href="mostrar_arrendatario.php"></a>
</div>

</body>
</html>
