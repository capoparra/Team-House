<?php
include '../../conexion db/conexion.php';

// Procesar la actualización si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num_identificacion = $_POST['id'];
    $tipo_identificacion = $_POST['tipo_identificacion'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    // Consulta para actualizar datos 
    $stmt = $conn->prepare("UPDATE tbl_arrendatario SET tipo_identificacion = ?, nombre = ?, apellido = ?, telefono = ?, correo = ? WHERE num_identificacion = ?");
    $stmt->bind_param("ssssss", $tipo_identificacion, $nombre, $apellido, $telefono, $correo, $num_identificacion);

    /*if ($stmt->execute()) {
        echo "Datos actualizados correctamente.";
    } else {
        echo "Error al actualizar los datos: . $stmt->error";
    }*/

    if ($stmt->execute()) {
        // Redirigir a la página de resultados después de la actualización
        header("Location: mostrar_arrendatario.php?update=success");
        exit();
    } else {
        echo "Error al actualizar el arrendatario: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

// Obtener datos para pre-cargar el formulario
$num_identificacion = $_GET['id'] ?? null;

if (!$num_identificacion) {
    die("No se encontró arrendatario.");
}

$sel = $conn->prepare("SELECT * FROM tbl_arrendatario WHERE num_identificacion = ?");
$sel->bind_param("s", $num_identificacion);
$sel->execute();
$arrendatario = $sel->get_result()->fetch_assoc();

if (!$arrendatario) {
    die("No se encontró el arrendatario con la cédula: $num_identificacion");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Arrendatario</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
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
                <p>Fin</p>
                <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>

        <!-- Formulario de edición -->
        <div class="form-outer">
        <form action="editar_arrendatario.php" method="post">

            <!-- Step 1 -->
            <div class="page slide-page active">
                <h2>Información Básica</h2>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($arrendatario['num_identificacion']); ?>"> 
                <div class="field">
                    <div class="label">Número Identificación</div>
                    <input type="number" name="num_identificacion" value="<?php echo htmlspecialchars($arrendatario['num_identificacion']); ?>" readonly>
                </div>
                <div class="field">
                    <div class="label">Tipo Identificación</div>
                    <select name="tipo_identificacion" id="tipo_identificacion" required>
                        <option value="CC" <?php echo ($arrendatario['tipo_identificacion'] == 'cc') ? 'selected' : ''; ?>>Cédula de Ciudadanía</option>
                        <option value="CE" <?php echo ($arrendatario['tipo_identificacion'] == 'ce') ? 'selected' : ''; ?>>Cédula de Extranjería</option>
                        <option value="PA" <?php echo ($arrendatario['tipo_identificacion'] == 'pa') ? 'selected' : ''; ?>>Pasaporte</option>
                    </select>
                </div>
                <div class="field">
                <div class="label">Nombre</div>
                <input type="text" name="nombre" value="<?php echo htmlspecialchars($arrendatario['nombre']); ?>" required
                    class="uppercase" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase()">
                </div>
                <div class="field">
                <div class="label">Apellido</div>
                <input type="text" name="apellido" value="<?php echo htmlspecialchars($arrendatario['apellido']); ?>" required
                    class="uppercase" style="text-transform: uppercase;" oninput="this.value = this.value.toUpperCase()">
                 </div>

                <div class="field btns">
                    <button type="button" class="next" data-step="1" style="background-color: blueviolet;">Siguiente</button>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="page">
                <h2>Información de Contacto</h2>
                <div class="field">
                    <div class="label">Teléfono</div>
                    <input type="number" name="telefono" value="<?php echo htmlspecialchars($arrendatario['telefono']); ?>" required>
                </div>
                <div class="field">
                    <div class="label">Correo Electrónico</div>
                    <input type="email" name="correo" value="<?php echo htmlspecialchars($arrendatario['correo']); ?>" required>
                </div>
                <div class="field btns">
                    <button type="button" class="prev" data-step="1" style="background-color: blueviolet;">Atrás</button>
                    <button type="button" class="next" data-step="2" style="background-color: blueviolet;">Siguiente</button>
                </div>
            </div>

            <!-- Final Step -->
            <div class="page">
                <h2>Confirmación</h2>
                <div class="field">
                    <p>Revisa la información antes de enviar.</p>
                </div>
                <div class="field btns">
                    <button type="button" class="prev" data-step="2" style="background-color: blueviolet;">Atrás</button>
                    <button type="submit" class="submit" style="background-color: blueviolet;">Actualizar</button>
                </div>
            </div>
        </form>
        <a href="mostrar_arrendatario.php"></a>
        </div>
    </div>
    <script src="../script.js"></script>
</body>
</html>

