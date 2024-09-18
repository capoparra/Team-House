<?php
header('Content-Type: application/json');
include '../conexion db/conexion.php';

$contrasena = $_POST['contrasena'] ?? '';
$code = $_POST['code'] ?? '';

if (empty($contrasena) || empty($code)) {
    echo json_encode(['status' => 'error', 'message' => 'Todos los campos son requeridos']);
    exit;
}

// Validar el código de recuperación
$sql = "SELECT email FROM tbl_password_reset WHERE reset_code = ? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $code);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email = $row['email'];

    // Encriptar la nueva contraseña
    // $contrasena_hashed = password_hash($contrasena, PASSWORD_BCRYPT);

    // Actualizar la contraseña en la tabla tbl_trabajador
    $sql = "UPDATE tbl_trabajador SET contraseña = ? WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $contrasena, $email);

    if ($stmt->execute()) {
        // Eliminar el código de recuperación
        $sql = "DELETE FROM tbl_password_reset WHERE reset_code = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $code);
        $stmt->execute();

        echo json_encode(['status' => 'success', 'message' => 'Contraseña actualizada con éxito']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al actualizar la contraseña']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Código de recuperación no válido']);
}

$stmt->close();
$conn->close();
?>
