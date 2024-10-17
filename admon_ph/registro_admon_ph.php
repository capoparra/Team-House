<?php
    include '../conexion db/conexion.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (
            !empty($_POST['nom_urb']) && !empty($_POST['nit']) &&
            !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['info_cuentaban'])
        ) {
            $empresa = strtoupper($_POST['nom_urb']);
            $nit = $_POST['nit'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            $info_cuentaban = $_POST['info_cuentaban'];
           

            $stmt = $conn->prepare("INSERT INTO tbl_admon_ph (nom_urb, nit, 
                correo,telefono,info_cuentaban) VALUES (?, ?, ? , ? ,?)");

            if ($stmt === false) {
                die("Error al preparar la consulta: $conn->error");
            }

            // Enlazar los parámetros
            $stmt->bind_param(
                'sssss', // Cadena de tipos con 5 caracteres
                $nom_urb,
                $nit,
                $correo,
                $telefono,
                $info_cuentaban
            );


            // Ejecutar la consulta
            if ($stmt->execute()) {
                if ($stmt->affected_rows > 0) {
                    $mensaje = "la urbanización ha sido registrado exitosamente.";
                    
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
    <title>Registro de admon ph</title>

</head>

<body>
<?php include '../include/navbar.php' ?>
<div class="container">
   
    <header>Team House</header>

    <!-- Progress Bar -->
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

    <!-- Form Container -->
    <div class="form-outer">
      <form action="registro_admon_ph.php" method="POST">

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