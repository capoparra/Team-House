<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar servicios publicos</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
<?php
include '../conexion db/conexion.php';

// Procesar la actualización si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $codigo = $_POST['codigo'];
    $empresa = $_POST['empresa'];
    $nit = $_POST['nit'];
    $tipo_servicio = $_POST['tipo_servicio'];
    

    // Consulta para actualizar datos 
    $stmt = $conn->prepare("UPDATE tbl_serv_publicos SET nit = ?, empresa = ?, tipo_servicio = ? WHERE codigo = ?");
    $stmt->bind_param("sss", $empresa, $nit, $tipo_servicio);

    if ($stmt->execute()) {
        // Redirigir a la página de resultados después de la actualización
        header("Location: serv_publicos_activo.php?update=success&id=$nit");
        exit();        
    } else {
        echo "Error al actualizar el servicio público: " . $stmt->error;        
    }
    
    $stmt->close();
    
}

// Obtener datos para pre-cargar el formulario
$codigo = $_GET['codigo'] ?? null;

if (!$codigo) {
    die("No se encontró codigo.");
}

$sel = $conn->prepare("SELECT * FROM tbl_serv_publicos WHERE codigo = ?");
$sel->bind_param("i", $codigo);
$sel->execute();
$serv_publicos = $sel->get_result()->fetch_assoc();

if (!$serv_publicos) {
    die("No se encontró la empresa: $codigo");
}

$conn->close();
?>

    <div class="container">
        <header>Team House</header>

        <!-- Barra de progreso -->
        <div class="progress-bar">
        <div class="step">
          <p></p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>

        <!-- Formulario de edición -->
        <div class="form-outer">
      <form action="actualizar_serv_publicos.php" method="POST">

        <!-- Step 1 -->
        <div class="page slide-page active">
          <h2>Información Básica</h2>
          <input type="hidden" name="id"
          value="<?php echo htmlspecialchars($serv_publicos['codigo']); ?>">
          
          <div class="field">
            <div class="label">Empresa</div>
            <input type="text" id="empresa" name="empresa" style="text-transform: uppercase" class="uppercase"
              oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="field">
            <div class="label">Nit</div>
            <input type="text" id="nit" name="nit" style="text-transform: uppercase" class="uppercase"
              oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="field">
            <div class="label">Tipo de servicio</div>
            <input type="text" id="tipo_servicio" name="tipo_servicio" style="text-transform: uppercase" class="uppercase"
              oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="page">
                    <h2>Confirmación</h2>
                    <div class="field">
                        <p>Revisa la información antes de enviar.</p>
                    </div>
                    <div class="field btns">
                        <button type="submit" class="submit">Actualizar</button>
                    </div>
                </div>
        </div>
      </form>
    </div>
  </div>
 

  <script src="../script.js"></script>
</body>

</html>