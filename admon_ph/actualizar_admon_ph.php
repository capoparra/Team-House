<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar admon ph</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
<?php
include '../conexion db/conexion.php';

// Procesar la actualización si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $codigo_urb = $_POST['codigo_urb'];
    $nom_urb = $_POST['nom_urb'];
    $nit = $_POST['nit'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $info_cuentaban = $_POST['info_cuentaban'];
    

    // Consulta para actualizar datos 
    $stmt = $conn->prepare("UPDATE tbl_admon_ph SET nom_urb = ?, nit = ?, correo = ?, telefono = ?,
    info_cuentaban WHERE codigo = ?");
    $stmt->bind_param("sssss", $nom_urb, $nit, $correo, $telefono, $info_cuentaban);

    if ($stmt->execute()) {
        // Redirigir a la página de resultados después de la actualización
        header("Location: admon_ph_activo.php?update=success&id=$codigo");
        exit();        
    } else {
        echo "Error al actualizar admon ph: " . $stmt->error;        
    }
    
    $stmt->close();
    
}

// Obtener datos para pre-cargar el formulario
$codigo = $_GET['codigo'] ?? null;

if (!$codigo) {
    die("No se encontró codigo.");
}

$sel = $conn->prepare("SELECT * FROM tbl_admon_ph WHERE codigo = ?");
$sel->bind_param("i", $codigo);
$sel->execute();
$admon_ph = $sel->get_result()->fetch_assoc();

if (!$admon_ph) {
    die("No se encontró admon ph: $codigo");
}

$conn->close();
?>

    <div class="container">
        <header>Team House</header>

        <!-- Barra de progreso -->
        <div class="progress-bar">
            
            <div class="step">
                <p>Paso 1</p>
                <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">                
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Paso 2</p>
                <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Paso 3</p>
                <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Fin</p>
                <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>

        <!-- Formulario de edición -->
        <div class="form-outer">
      <form action="actualizar_admon_ph.php" method="POST">

        <!-- Step 1 -->
        <div class="page slide-page active">
                    <h2>Información Básica</h2>
                    <input type="hidden" name="id"
                    value="<?php echo htmlspecialchars($admon_ph['codigo']); ?>">

          
                    <div class="field">
                        <div class="label">Nombre Urbanización</div>
                        <input type="text" id="nom_urb" name="nom_urb" style="text-transform: uppercase" class="uppercase"
                        oninput="this.value = this.value.toUpperCase()" required>
                    </div>
                    <div class="field">
                        <div class="label">NIT</div>
                      <input type="text" id="nit" name="nit" style="text-transform: uppercase" class="uppercase"
                      oninput="this.value = this.value.toUpperCase()" required>
                  </div>
                    <div class="field btns">
                        <button type="button" class="firstNext next" style="background-color: blueviolet;">Siguiente</button>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="page">
                    <h2>Información de Contacto</h2>
                    <div class="field">
                        <div class="label">Teléfono</div>
                        <input type="number" id="telefono" name="telefono" style="text-transform: uppercase" class="uppercase"
                        oninput="this.value = this.value.toUpperCase()" required>
                    </div>
                    <div class="field">
                        <div class="label">Correo</div>
                        <input type="email" id="correo" name="correo" style="text-transform: uppercase" class="uppercase"
                        oninput="this.value = this.value.toUpperCase()" required>
                    </div>
                    <div class="field btns">
                        <button type="button" class="prev-1 prev" style="background-color: blueviolet;">Atrás</button>
                        <button type="button" class="next-1 next" style="background-color: blueviolet;">Siguiente</button>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="page">
                    <h2>Detalles Financieros</h2>
                    <div class="field">
                        <div class="label">Información Bancaria</div>
                        <textarea id="info_cuentaban" name="info_cuentaban" style="text-transform: uppercase" class="uppercase"
                        oninput="this.value = this.value.toUpperCase()" required></textarea>
                  </div>
                    <div class="field btns" >
                        <button type="button" class="prev-2 prev" style="background-color: blueviolet;">Atrás</button>
                        <button type="button" class="next-2 next" style="background-color: blueviolet;">Siguiente</button>
                    </div>
                </div>

                <!-- Final Step -->
                <div class="page">
                    <h2>Confirmación</h2>
                    <div class="field">
                        <p>Revisa la información antes de enviar.</p>
                    </div>
                    <div class="field btns">
                        <button type="button" class="prev-3 prev" style="background-color: blueviolet;">Atrás</button>
                        <button type="submit" class="submit" style="background-color: blueviolet;">Enviar</button>
                    </div>
                </div>
        </div>
      </form>
    </div>
  </div>
 

  <script src="../script.js"></script>
</body>

</html>