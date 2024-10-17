<?php
    include '../conexion db/conexion.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (
            !empty($_POST['empresa']) && !empty($_POST['nit']) &&
            !empty($_POST['tipo_servicio']) 
        ) {
            $empresa = strtoupper($_POST['empresa']);
            $nit = $_POST['nit'];
            $tipo_servicio = $_POST['tipo_servicio'];
           

            $stmt = $conn->prepare("INSERT INTO tbl_serv_publicos (empresa, nit, 
                tipo_servicio) VALUES (?, ?, ?)");

            if ($stmt === false) {
                die("Error al preparar la consulta: $conn->error");
            }

            // Enlazar los parámetros
            $stmt->bind_param(
                'sss', // Cadena de tipos con 3 caracteres
                $empresa,
                $nit,
                $tipo_servicio
            );


            // Ejecutar la consulta
            if ($stmt->execute()) {
                if ($stmt->affected_rows > 0) {
                    $mensaje = "El servicio publico ha sido registrado exitosamente.";
                    
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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../style_index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro de servicios publicos</title>

</head>

<body>
<?php include '../include/navbar.php' ?>
<div class="container">
   
    <header>Team House</header>

    <!-- Progress Bar -->
    <div class="progress-bar">
        <div class="step">
          <p></p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>

    <!-- Form Container -->
    <div class="form-outer">
      <form action="registro_serv_publicos.php" method="POST">

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