<?php
include '../../conexion db/conexion.php';
include '../../navbar.php';

// Consulta para obtener todos los arrendatarios
$query = "SELECT * FROM tbl_arrendatario";
$result = $conn->query($query);

if (isset($_GET['update']) && $_GET['update'] == 'success') {
    echo '<div class="alert alert-success" role="alert">El arrendatario se actualizó correctamente.</div>';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Completa Arrendatarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body>
    <div class="container my-5">
        <h1 class="text-center"><small class="text-muted">Arrendatarios</small></h1>
        <h2 class="text-center mb-4">Información Completa</h2>
        <form action="" method="get">
            <div class="row mb-3 justify-content-center">
                <div class="col-8">
                    <input type="text" class="form-control" name="buscar"
                        placeholder="Buscar por cédula, nombre o apellido">
                </div>
                <div class="col-4">
                    <button type="submit" name="btnb" class="btn btn-primary btn-outline-dark"
                    style="background: linear-gradient(50deg, #8350F2, #bab2d4)">Buscar</button>
                    <a href="mostrar_arrendatarios.php" class="btn btn-secondary">Limpiar</a>
                </div>
            </div>
        </form>

        <div class="row justify-content-center">
            <?php
            if (isset($_GET['btnb'])) {
                $buscar = $_GET['buscar'];
                // Consulta SQL con búsqueda por cédula, nombre o apellido
                $query = "SELECT * FROM tbl_arrendatario WHERE num_identificacion LIKE '%$buscar%' OR nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%'";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {                    
                    while ($row = $result->fetch_assoc()) {
                        $estado = ($row['estado_arr'] == 1) ? 'Activo' : 'Inactivo';
                        echo '
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">' . $row['nombre'] . ' ' . $row['apellido'] . '</h5>
                                    <p class="card-text">
                                        <strong>Identificación:</strong> ' . $row['tipo_identificacion'] .' '. $row['num_identificacion'] . '
                                    </p>
                                    <p class="card-text">
                                        <strong>Teléfono:</strong> ' . $row['telefono'] . '
                                    </p>
                                    <p class="card-text">
                                        <strong>Correo:</strong> ' . $row['correo'] . '
                                    </p>
                                    <p class="card-text"> 
                                        <strong>Estado:</strong> ' . $estado . '                                                               
                                    </p>
                                    <a href=".." class="btn btn-primary" style="background-color: #4f37a7; border-color: #4f37a7">Registrar pago</a>
                                    <a class="btn btn-primary btn-outline-dark float-end me-2" href="eliminar_arrendatario.php?id' . $row['num_identificacion'] .'" role="button" 
                                    style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
                                    <i class="bi bi-trash3-fill"></i>
                                    </a>
                                    <a class="btn btn-primary btn-outline-dark float-end me-2" href="editar_arrendatario.php?id=' . $row['num_identificacion'] .'" role="button" 
                                    style="background: linear-gradient(50deg, #8350F2, #bab2d4); ">
                                    <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    echo '<div class="col"><div class="alert alert-warning text-center" role="alert">No se encontraron resultados</div></div>';
                }
            }
            ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
