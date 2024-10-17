<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar pagos propietarios</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
<?php
include '../conexion db/conexion.php';

// Procesar la actualización si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mes = $_POST['mes'];
    $fecha_pago = $_POST['fecha_pago'];
    $total_deducciones = $_POST['total_deducciones'];
    $importe_a_pagar = $_POST['importe_a_pagar'];
    $estado_pago_prop = $_POST['estado_pago_prop'];
    

    // Consulta para actualizar datos 
    $stmt = $conn->prepare("UPDATE tbl_pagos_prop SET mes = ?, fecha_pago = ?, total_deducciones = ?, importe_a_pagar = ?, estado_pago_pro = ? WHERE codigo = ?");
    $stmt->bind_param("ssssss", $mes, $fecha_pago, $total_deducciones, $importe_a_pagar, $estado_pago_pro);

    if ($stmt->execute()) {
        // Redirigir a la página de resultados después de la actualización
        header("Location: pagos_pro_activo.php?update=success&id=$codigo");
        exit();        
    } else {
        echo "Error al actualizar el pagos propietarios: " . $stmt->error;        
    }
    
    $stmt->close();
    
}

// Obtener datos para pre-cargar el formulario
$codigo = $_GET['codigo'] ?? null;

if (!$codigo) {
    die("No se encontró pagos propietarios.");
}

$sel = $conn->prepare("SELECT * FROM tbl_pagos_pro WHERE codigo = ?");
$sel->bind_param("s", $codigo);
$sel->execute();
$pagos_pro = $sel->get_result()->fetch_assoc();

if (!$pagos_pro) {
    die("No se encontró pagos pro con el codigo: $codigo");
}

$conn->close();
?>

    <div class="container">
        <header>Team House</header>

        <div class="row mb-3">
          <div class="col-6">
            <div class="label">Codigo</div>
            <input type="number" id="codigo" name="codigo" class="form-control input"
              oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="row mb-3">
          <div class="col-6">
            <div class="label">mes</div>
            <input type="text" id="mes" name="mes" class="form-control input"
              oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="row mb-3">
          <div class="col-6">
            <div class="label">fecha pago</div>
            <input type="text" id="fecha_pago" name="fecha_pago" class="form-control input"
              oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="row mb-3">
          <div class="col-6">
            <div class="label">total deducciones</div>
            <input type="text" id="total_deducciones" name="total_deducciones" class="form-control input"
              oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="row mb-3">
          <div class="col-6">
            <div class="label">importe a pagar</div>
            <input type="text" id="importe_a_pagar" name="importe_a_pagar" class="form-control input"
              oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="row mb-3">
          <div class="col-6">
            <div class="label">Estado pago propietarios</div>
            <input type="text" id="estado_pago_pro" name="estado_pago_pro" class="form-control input"
              oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="page">
                    <h2>Confirmación</h2>
                    <div class="field">
                        <p>Revisa la información antes de enviar.</p>
                    </div>
                    <div class="field btns">
                        <button type="submit" class="submit">Registrar</button>
                    </div>
                </div>
        </div>
      </form>
    </div>
  </div>
 

  <script src="../script.js"></script>
</body>

</html>