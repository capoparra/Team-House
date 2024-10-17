<?php
    include '../conexion db/conexion.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (
            !empty($_POST['num_identificacion']) &&
            !empty($_POST['nombre']) && !empty($_POST['apellido']) &&
            !empty($_POST['telefono']) && !empty($_POST['correo'])  &&
            !empty($_POST['rol']) && !empty($_POST['contrasena']) &&
            !empty($_POST['direccion'])
        ) {
            $num_identificacion = $_POST['num_identificacion'];
            $nombre = strtoupper($_POST['nombre']);
            $apellido = strtoupper($_POST['apellido']);
            $direccion = strtoupper($_POST['direccion']);
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $rol = $_POST['rol'];

            $stmt = $conn->prepare("INSERT INTO tbl_trabajador (cedula, nombre, apellido, 
                telefono, direccion,  correo, contraseña, rol_codigo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

            if ($stmt === false) {
                die("Error al preparar la consulta: $conn->error");
            }

            // Enlazar los parámetros
            $stmt->bind_param(
                'ssssssss', // Cadena de tipos con 8 caracteres
                $num_identificacion,
                $nombre,
                $apellido,
                $telefono,
                $direccion,
                $correo,
                $contrasena,
                $rol
            );


            // Ejecutar la consulta
            if ($stmt->execute()) {
                if ($stmt->affected_rows > 0) {
                    $mensaje = "El trabajador ha sido registrado exitosamente.";
                    
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
    <title>Registro de Trabajador</title>

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
        <p>Fin</p>
        <div class="bullet">
          <span>3</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
    </div>

    <!-- Form Container -->
    <div class="form-outer">
      <form action="registro_trabajador.php" method="POST">

        <!-- Step 1 -->
        <div class="page slide-page active">
          <h2>Información Básica</h2>
          <div class="field">
            <div class="label">Número Identificación</div>
            <input type="number" id="num_identificacion" name="num_identificacion" required>
          </div>
          <div class="field">
            <div class="label">Nombres</div>
            <input type="text" id="nombre" name="nombre" style="text-transform: uppercase" class="uppercase"
              oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="field">
            <div class="label">Apellidos</div>
            <input type="text" id="apellido" name="apellido" style="text-transform: uppercase" class="uppercase"
              oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="field">
            <div class="label">Direccion</div>
            <input type="text" id="direccion" name="direccion" style="text-transform: uppercase" class="uppercase"
              oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="field btns">
            <button type="button" class="next" data-step="1">Siguiente</button>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="page">
          <h2>Información de Contacto</h2>
          <div class="field">
            <div class="label">Teléfono</div>
            <input type="number" id="telefono" name="telefono" required>
          </div>
          <div class="field">
            <div class="label">Correo</div>
            <input type="email" id="correo" name="correo" required>
          </div>
          <div class="field">
            <div class="label">Rol</div>
            <select name="rol" id="rol" required>
              <option value="1">Asesor</option>
              <option value="2">Aux administrativo</option>
              <option value="3">Coordinador</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Contraseña</div>
            <input type="password" id="contrasena" name="contrasena" required>
          </div>
          <div class="field btns">
            <button type="button" class="prev" data-step="1">Atrás</button>
            <button type="button" class="next" data-step="2">Siguiente</button>
          </div>
        </div>

        <!-- Final Step -->
        <div class="page">
          <h2>Confirmación</h2>
          <div class="field">
            <p>Revisa la información antes de enviar.</p>
          </div>
          <div class="field btns">
            <button type="button" class="prev" data-step="2">Atrás</button>
            <button type="submit" class="submit">Enviar</button>
          </div>
        </div>

      </form>
    </div>
  </div>

  <script src="../script.js"></script>
</body>

</html>