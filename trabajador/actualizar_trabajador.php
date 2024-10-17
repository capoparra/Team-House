<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar trabajador</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
<?php
include '../conexion db/conexion.php';

// Procesar la actualización si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $rol_codigo = $_POST['rol_codigo'];

    // Consulta para actualizar datos 
    $stmt = $conn->prepare("UPDATE tbl_trabajador SET rol_codigo = ?, nombre = ?, apellido = ?, telefono = ?, direccion = ?, correo = ?, contraseña = ? WHERE cedula = ?");
    $stmt->bind_param("ssssss", $cedula, $nombre, $apellido, $telefono, $direccion, $correo, $contraseña,$rol_codigo);

    if ($stmt->execute()) {
        // Redirigir a la página de resultados después de la actualización
        header("Location: trabajador_activo.php?update=success&id=$cedula");
        exit();        
    } else {
        echo "Error al actualizar el trabajador: " . $stmt->error;        
    }
    
    $stmt->close();
    
}

// Obtener datos para pre-cargar el formulario
$cedula = $_GET['cedula'] ?? null;

if (!$cedula) {
    die("No se encontró trabajador.");
}

$sel = $conn->prepare("SELECT * FROM tbl_trabajador WHERE cedula = ?");
$sel->bind_param("s", $cedula);
$sel->execute();
$trabajador = $sel->get_result()->fetch_assoc();

if (!$trabajador) {
    die("No se encontró el trabajador con la cédula: $cedula");
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
                <p>Fin</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>

        <!-- Formulario de edición -->
        <div class="form-outer">
            <form action="actualizar_trabajador.php" method="post">

                <!-- Step 1 -->
                <div class="page slide-page active">
                    <h2>Información Básica</h2>
                    <input type="hidden" name="id"
                        value="<?php echo htmlspecialchars($trabajador['cedula']); ?>">
                    <div class="field">
                        <div class="label">cedula</div>
                        <input type="number" name="cedula"
                            value="<?php echo htmlspecialchars($trabajador['cedula']); ?>" readonly>
                    </div>
                    <div class="field">
                        <div class="label">cedula</div>
                        <select name="cedula" id="cedula" required>
                            <option value="CC" <?php echo ($trabajador['cedula'] == 'cc') ? 'selected' : ''; ?>>Cédula de Ciudadanía</option>
                            <option value="CE" <?php echo ($trabajador['cedula'] == 'ce') ? 'selected' : ''; ?>>Cédula de Extranjería</option>
                            <option value="PA" <?php echo ($trabajador['cedula'] == 'pa') ? 'selected' : ''; ?>>Pasaporte</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Nombre</div>
                        <input type="text" name="nombre"
                            value="<?php echo htmlspecialchars($arrendatario['nombre']); ?>" required class="uppercase"
                            style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase()">
                    </div>
                    <div class="field">
                        <div class="label">Apellido</div>
                        <input type="text" name="apellido"
                            value="<?php echo htmlspecialchars($arrendatario['apellido']); ?>" required
                            class="uppercase" style="text-transform: uppercase;"
                            oninput="this.value = this.value.toUpperCase()">
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
                        <input type="number" name="telefono"
                            value="<?php echo htmlspecialchars($arrendatario['telefono']); ?>" required>
                    </div>
                    <div class="field">
                        <div class="label">Correo Electrónico</div>
                        <input type="email" name="correo"
                            value="<?php echo htmlspecialchars($arrendatario['correo']); ?>" required>
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
                        <button type="submit" class="submit">Actualizar</button>
                    </div>
                </div>
            </form>           
        </div>
    </div>

    <script src="../script.js"></script>
</body>

</html>