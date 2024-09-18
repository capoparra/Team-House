<?php
header('Content-Type: application/json');
include '../conexion db/conexion.php';

$email = $_POST['email'] ?? '';

if (empty($email)) {
    echo json_encode(['status' => 'error', 'message' => 'El email es requerido']);
    exit;
}

$sql = "SELECT * FROM tbl_trabajador WHERE correo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {    
    $reset_code = bin2hex(random_bytes(16)); 
        
    $sql = "INSERT INTO tbl_password_reset (email, reset_code) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $email, $reset_code);

    /////// ENVIAR CORRER
     ///"http://localhost/team_house/recuperacion2.php?code=".$reset_code

    
       /* $to = $email;
        $subject = "Actualizar Contraseña";
        $message = "http://localhost/team_house/recuperacion2.php?code=".$reset_code;
        $headers = "From: no-reply@tu-dominio.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        mail($to, $subject, $message, $headers); */
    
    
    if ($stmt->execute()) {        
        echo json_encode(['status' => 'success', 'message' => 'Código de recuperación generado', 'reset_code' => $reset_code]);
    } else {        
        echo json_encode(['status' => 'error', 'message' => 'Error al generar el código de recuperación']);
    }
} else {    
    echo json_encode(['status' => 'error', 'message' => 'No se encontró el usuario']);
}

$stmt->close();
$conn->close();

?>
