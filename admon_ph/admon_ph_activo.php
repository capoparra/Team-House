<?php
include '../conexion db/conexion.php';

// Consulta para obtener todos admon ph
$query = "SELECT * FROM tbl_admon_ph";
$result = $conn->query($query);

// Inicializar variables
$mensaje = '';
$modal_visible = false;
$mostrar_confirmacion_inactivacion = false; // Inicializar la variable por defecto

// Verificar si se ha enviado un parámetro por GET para mostrar el mensaje
if (isset($_GET['update'])) {
    $update_type = $_GET['update'];

    // Determinar el mensaje basado en el tipo de actualización
    if ($update_type === 'success') {
        $mensaje = 'El admon hp  ha sido actualizado exitosamente.';
        $modal_visible = true;
    } elseif ($update_type === 'error') {
        $mensaje = 'Hubo un error al actualizar admon ph .';
        $modal_visible = true;
    } elseif ($update_type === 'inactivate_success') {
        $mensaje = 'El admon ph  ha sido inactivado exitosamente.';
        $modal_visible = true;
    } elseif ($update_type === 'inactivate_error') {
        $mensaje = 'Hubo un error al inactivar admon ph.';
        $modal_visible = true;
    } elseif ($update_type === 'reactivate_success') {
        $mensaje = 'admon ph ha sido Reactivado exitosamente.';
        $modal_visible = true;
    }
}

// Mostrar el modal para mensajes de actualización o inactivación
if ($modal_visible) {
    echo '<div class="container">
            <div class="modal fade show" id="resultadoModal" tabindex="-1" aria-labelledby="resultadoModalLabel" aria-hidden="true" style="display: block;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-light" style="--bs-bg-opacity: 0.5; backdrop-filter:blur(1rem); 
            box-shadow: 1.3rem 1.3rem 1.3rem rgba(0,0,0,0.5);">
                        <div class="modal-header">
                            <h5 class="modal-title" id="resultadoModalLabel">Team House</h5>
                        </div>
                        <div class="modal-body">
                            <strong>' . htmlspecialchars($mensaje) . '</strong>
                        </div>
                        <div class="modal-footer">
                            <a href="admon_ph_activo.php">
                                <button type="button" class="btn btn-secondary bg-light text-dark">Cerrar</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrendatarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include '../include/navbar.php' ?>
    <h3 class="title text-light d-flex justify-content-between align-items-center" style="margin: 15px">
        admon ph
    </h3>

    <nav class="navbar bg-white mb-5" style="--bs-bg-opacity: 0.2; backdrop-filter:blur(1rem); 
            box-shadow: 1.3rem 1.3rem 1.3rem rgba(0,0,0,0.5);">
        <div class="container-fluid">
            <form class="d-flex" role="search" method="GET" action="admon_ph_activo.php">
                <input type="search" name="buscar" class="form-control me-2"
                    placeholder="Buscar por cédula, nombre o apellido" style="background-color: #E4C1FF; width: 20rem">
                <button type="submit" name="btn" class="btn btn-outline-light"
                    style="border-radius: 2rem">Buscar</button>
                <a href="admon_ph_activo.php" class="text-light ms-2 my-auto" style="font-size: 0.85rem;">Limpiar
                    Vista</a>
            </form>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn fw-bold my-2 me-5 btn-outline-transparent text-dark" href="registro_admon_ph.php"
                    role="button" style="background: linear-gradient(-90deg, #C170FF, #E6C5FF); border-radius: 2rem">
                    <i class="bi bi-plus-circle me-2"></i> CREAR ADMON PH  
                </a>
            </div>
        </div>
    </nav>
    <nav class="navbar bg-transparent navbar-expand-lg mt-5 mb-3 ms-5 fixed">
        <div class="container-fluid">
            <h5 class="text-light"><i class="bi bi-list-check text-light" style="padding: 1rem"></i> Lista de
                admon ph activos</h5>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <?php
            if (isset($_GET['btn'])) {
                $buscar = '%' . $_GET['buscar'] . '%';
                // Preparar la consulta SQL para buscar servicios publicos  activos
                $stmt = $conn->prepare(
                    "SELECT * FROM tbl_admon_ph
                    WHERE (codigo LIKE ? OR nombre LIKE ? OR apellido LIKE ?) 
                    AND estado_admon = 1
                    ORDER BY fecha_creacion DESC"
                );
                // Enlazar los parámetros
                $stmt->bind_param("sss", $buscar, $buscar, $buscar);
                // Ejecutar la consulta
                $stmt->execute();
                // Obtener los resultados
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $estado = ($row['estado_admon_ph'] == 1) ? 'Activo' : 'Inactivo';
                        echo '
                        <div class="col-md-4">    
                            <div class="card mt-3 mb-2 mx-auto bg-dark" style="width: 23rem; height: 18rem; padding: 10px;  --bs-bg-opacity: 0.7; ">
                                <div class="card-body">                                
                                <div class="d-flex justify-content-center mb-3 text-light">                                    
                                    <h5 class="card-title" style=" white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">' . htmlspecialchars($row['codigo_urb'] . ' ' . $row['nom_urb']) . '</h5>
                                </div>                                
                                <p class="card-text text-light"> 
                                    <i class="bi bi-person-vcard me-1"></i>
                                    <strong>correo:</strong> &nbsp ' . htmlspecialchars($row['nit'] . ' ' . $row['correo']) . '
                                </p>
                                <p class="card-text text-light">
                                        <i class="bi bi-phone-vibrate me-1"></i>
                                        <strong>Teléfono:</strong> &nbsp ' . htmlspecialchars($row['telefono']) . '
                                </p>
                                <p class="card-text text-light">
                                    <i class="bi bi-envelope-check me-1"></i>
                                    <strong>info_cuentaban:</strong> &nbsp ' . htmlspecialchars($row['info_cuentaba']) . '
                                </p>
                                <p class="card-text text-light"> 
                                    <i class="bi bi-person-check me-1"></i>
                                    <strong>Estado:</strong> &nbsp ' . $estado . '                                                               
                                </p>    
                                <div class="btn-group dropend" style="position: relative; z-index: 1050;">
                                     <button class="btn btn-secondary btn_sm bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                         <i class="bi bi-three-dots-vertical"></i>
                                    </button>                                
                                    <ul class="dropdown-menu dropdown-menu-dark" style="position: absolute" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#">Ver Detalles</a></li>
                                        <li><a class="dropdown-item" href="actualizar_admon_ph.php?id=' . $row['codigo'] . '">Editar Información</a></li>
                                        <li>
                                            <!-- Formulario oculto para inactivar -->
                                            <form action="inactivar_arr.php" method="POST" style="display:inline;">
                                                <input type="hidden" name="id" value="' . htmlspecialchars($row['codigo']) . '">
                                                <button type="submit" class="dropdown-item">Inactivar</button>
                                            </form>  
                                        </li>
                                        <li><a class="dropdown-item" href="#">Historial de Pagos</a></li>
                                    </ul>
                                </div>                                                           
                                </div>                                  
                            </div>                            
                        </div>';
                    }
                } else {
                    echo '<div class="col"><div class="alert alert-warning text-center" role="alert">No se encontraron resultados</div></div>';
                }
            }
            $conn->close();
           ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>