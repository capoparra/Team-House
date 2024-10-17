<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trabajador Inactivos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include '../include/navbar.php'; ?>

    <h3 class="title text-light d-flex justify-content-between align-items-center" style="margin: 15px">
        Trabajador Inactivos
    </h3>

    <nav class="navbar bg-white mb-5" style="--bs-bg-opacity: 0.2; backdrop-filter: blur(1rem); box-shadow: 1.3rem 1.3rem 1.3rem rgba(0,0,0,0.5);">
        <div class="container-fluid">
            <form class="d-flex" role="search" method="GET" action="trabajador_inactivo.php">
                <input type="search" name="buscar" class="form-control me-2" placeholder="Buscar por cédula, nombre o apellido" style="background-color: #E4C1FF; width: 20rem">
                <button type="submit" name="btn-in" class="btn btn-outline-light" style="border-radius: 2rem">Buscar</button>
                <a href="arrendatario_inactivo.php" class="text-light ms-2 my-auto" style="font-size: 0.85rem;">Limpiar Vista</a>
            </form>
        </div>
    </nav>

    <nav class="navbar bg-transparent navbar-expand-lg mt-5 mb-3 ms-5 fixed">
        <div class="container-fluid">
            <h5 class="text-light"><i class="bi bi-list-check text-light" style="padding: 1rem"></i> Lista de Trabajadores Inactivos</h5>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <?php
            if (isset($_GET['btn-in'])) {
                $buscar = '%' . $_GET['buscar'] . '%';
                
                // Preparar la consulta SQL para buscar trabajadores inactivos
                $stmt = $conn->prepare(
                    "SELECT * FROM tbl_trabajador 
                    WHERE (num_identificacion LIKE ? OR nombre LIKE ? OR apellido LIKE ?) 
                    AND estado_tra = 0
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
                        echo '
                        <div class="col-md-4">    
                            <div class="card mt-3 mb-2 mx-auto bg-dark" style="width: 23rem; height: 18rem; padding: 10px; --bs-bg-opacity: 0.7;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center mb-3 text-light">
                                        <h5 class="card-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">' . htmlspecialchars($row['nombre'] . ' ' . $row['apellido']) . '</h5>
                                    </div>
                                    <p class="card-text text-light">
                                        <i class="bi bi-person-vcard me-1"></i>
                                        <strong>Identificación:</strong> &nbsp ' . htmlspecialchars($row['tipo_identificacion'] . ' ' . $row['num_identificacion']) . '
                                    </p>
                                    <p class="card-text text-light">
                                        <i class="bi bi-phone-vibrate me-1"></i>
                                        <strong>Teléfono:</strong> &nbsp ' . htmlspecialchars($row['telefono']) . '
                                    </p>
                                    <p class="card-text text-light">
                                        <i class="bi bi-envelope-check me-1"></i>
                                        <strong>Correo:</strong> &nbsp ' . htmlspecialchars($row['correo']) . '
                                    </p>
                                    <p class="card-text text-light">
                                        <i class="bi bi-person-check me-1"></i>
                                        <strong>Estado:</strong> &nbsp Inactivo
                                    </p>
                                    <div class="btn-group dropend" style="position: relative; z-index: 1050;">
                                        <button class="btn btn-secondary btn-sm bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Ver Detalles</a></li>
                                            <li>
                                                <!-- Formulario oculto para activar -->
                                                <form action="reactivar_arr.php" method="POST" style="display:inline;">
                                                    <input type="hidden" name="id" value="' . htmlspecialchars($row['num_identificacion']) . '">
                                                    <button type="submit" class="dropdown-item">Activar</button>
                                                </form>
                                            </li>
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
