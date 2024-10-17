<?php
    include '../conexion db/conexion.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (
            !empty($_POST['mes']) && !empty($_POST['fecha_pago']) &&
            !empty($_POST['total_deducciones']) &&
            !empty($_POST['importe_a_pagar']) &&
            !empty($_POST['estado_pago_pro']) 
        ) {
            $mes = strtoupper($_POST['mes']);
            $fecha_pago = $_POST['fecha_pago'];
            $total_deducciones = $_POST['total_deducciones'];
            $total_a_pagar = $_POST['importe_a_pagar'];
            $estado_pago_pro = $_POST['estado_pago_pro'];
           

            $stmt = $conn->prepare("INSERT INTO tbl_pagos_pro (mes, fecha_pago, 
                total_deducciones, importe_a_pagar, estado_pago_pro) VALUES (?, ?, ?, ?, ?)");

            if ($stmt === false) {
                die("Error al preparar la consulta: $conn->error");
            }

            // Enlazar los parámetros
            $stmt->bind_param(
                'sssss', // Cadena de tipos con 5 caracteres
                $mes,
                $fecha_pago,
                $total_deducciones,
                $importe_a_pagar,
                $estado_pago_pro
            );


            // Ejecutar la consulta
            if ($stmt->execute()) {
                if ($stmt->affected_rows > 0) {
                    $mensaje = "El pago propietario ha sido registrado exitosamente.";
                    
                } else {
                    $mensaje = "La consulta se ejecutó, pero no se afectaron filas.";
                } 
            } 

            // Cerrar la declaración
            $stmt->close();

            // Cerrar la conexión a base de datos
            $conn->close();
        }

    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Team House</title>
  <link rel="stylesheet" href="../style1.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
<?php include '../include/navbar.php' ?>
<div class="container">
   
    <header>Team House</header>


    <!-- Form Container -->
    <div class="contenedor-padre bg-white mt-5" style="--bs-bg-opacity: 0.2;">
      <form action="registro_pagos_pro.php" method="POST" id="formulario_pagos_pro" class="container"> 
      <div class="header">
      <h2>pagos propietarios</h2>
      </div>

        <!-- Step 1 -->
        <div class="page slide-page active">
          <h2>Información Básica</h2>
          <input type="hidden" name="id"
          value="<?php echo htmlspecialchars($pagos_pro['codigo']); ?>">
          
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