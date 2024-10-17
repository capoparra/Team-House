<?php
    include '../conexion db/conexion.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (
            !empty($_POST['num_contrato']) && !empty($_POST['id_cliente']) &&
            !empty($_POST['nombre_cliente']) 
        ) {
            $empresa = strtoupper($_POST['num_contrato']);
            $nit = $_POST['id_cliente'];
            $tipo_servicio = $_POST['nombre_cliente'];
           

            $stmt = $conn->prepare("INSERT INTO tbl_serv_inm (num_contrato, id_cliente, 
                nombre_cliente) VALUES (?, ?, ?)");

            if ($stmt === false) {
                die("Error al preparar la consulta: $conn->error");
            }

            // Enlazar los parámetros
            $stmt->bind_param(
                'sss', // Cadena de tipos con 3 caracteres
                $num_contrato,
                $id_cliente,
                $nombre_cliente
            );


            // Ejecutar la consulta
            if ($stmt->execute()) {
                if ($stmt->affected_rows > 0) {
                    $mensaje = "El servicio immobiliaria ha sido registrado exitosamente.";
                    
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

    <!-- Form Container -->
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