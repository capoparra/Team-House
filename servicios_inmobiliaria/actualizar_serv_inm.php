<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar servicios inmobiliaria</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
<?php
include '../conexion db/conexion.php';

// Procesar la actualización si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $inmub_codigo = $_POST['inmub_codigo'];
    $serv_codigo = $_POST['serv_codigo'];
    $num_contrato = $_POST['num_contrato'];
    $id_cliente = $_POST['id_cliente'];
    $nombre_cliente = $_POST['nombre_cliente'];
    

    // Consulta para actualizar datos 
    $stmt = $conn->prepare("UPDATE tbl_serv_inm SET num_contrato = ?, id_cliente = ?, nombre_cliente = ? WHERE inmb_codigo = ? and serv_codigo = ?");
    $stmt->bind_param("sss", $empresa, $nit, $tipo_servicio);

    if ($stmt->execute()) {
        // Redirigir a la página de resultados después de la actualización
        header("Location: serv_inm_activo.php?update=success&id=$inmb_codigo and $serv_codigo");
        exit();        
    } else {
        echo "Error al actualizar el servicio de inmobiliaria: " . $stmt->error;        
    }
    
    $stmt->close();
    
}

// Obtener datos para pre-cargar el formulario
$inmb_codigo = $_GET['inmb_codigo'] ?? null and
$serv_codigo = $_GET['serv_codigo'] ?? null ;

if (!$codigo) {
    die("No se encontró codigo.");
}

$sel = $conn->prepare("SELECT * FROM tbl_serv_inm WHERE inmb_codigo = ? and serv_codigo = ?");
$sel->bind_param("i", $codigo);
$sel->execute();
$serv_inm = $sel->get_result()->fetch_assoc();

if (!$serv_inm) {
    die("No se encontró los servicios inmobiliaria: $codigo");
}

$conn->close();
?>

    <div class="container">
        <header>Team House</header>

        <!-- Barra de progreso -->
        <div class="progress-bar">
        <div class="step">
          <p>Paso 1</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Paso 2</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Paso 3</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Fin</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>

        <!-- Formulario de edición -->
        <div class="form-outer">
      <form action="registro_serv_inm.php" method="POST">

        <!-- Step 1 -->
        <div class="page slide-page active">
          <h2>Información Básica</h2>
          <input type="hidden" name="id"
          value="<?php echo htmlspecialchars($serv_inm['codigo']); ?>">
          
          <div class="page slide-page">
            <div class="field">
              <div class="label">Codigo Inmobiliaria</div>
              <input type="number" id="inmub_codigo"  name="inmub_codigo" style="text-transform: uppercase" class="uppercase" 
              oninput="this.value =this.value.toUpperCase()" required>
            </div>
            <div class="field">
              <div class="label">Codigo Servicio</div>
              <input type="number" id="serv_codigo"  name="serv_codigo" style="text-transform: uppercase" class="uppercase" 
              oninput="this.value =this.value.toUpperCase()" required>
            </div>
            <div class="field">
              <button class="firstNext next">Siguiente</button>
            </div>
          </div>

          <div class="page">
            <div class="title"></div>
            <div class="field">
              <div class="label">Numero Del Contrato</div>
              <input type="number" id="num_contrato"  name="num_contrato" style="text-transform: uppercase" class="uppercase" 
              oninput="this.value =this.value.toUpperCase()" required>
            </div>
            <div class="field">
              <div class="label">Identificacion Del Cliente</div>
              <input type="text" id="id_cliente"  name="id_cliente" style="text-transform: uppercase" class="uppercase" 
              oninput="this.value =this.value.toUpperCase()" required>
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Atrás</button>
              <button class="next-1 next">Siguiente</button>
            </div>
          </div>

          <div class="page">
            <div class="field">
              <div class="label">Nombre del Cliente</div>
              <input type="text" id="nombre_cliente"  name="nombre_cliente" style="text-transform: uppercase" class="uppercase" 
              oninput="this.value =this.value.toUpperCase()" required>
            </div>    
                 <div class="field btns">
              <button class="prev-2 prev">Atrás</button>
              <button class="next-2 next">Siguiente</button>
            </div>
          </div>

          <div class="page">
            <div class="title"></div>
            <div class="field btns">
              <button class="submit">Enviar</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
 

  <script src="../script.js"></script>
</body>

</html>