<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team House </title>
    <!-- Link a Bootstrap CSS -->
    <link rel="stylesheet" href="style_index_adm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <?php include 'navbar.php'; ?>

    <h3 class="Title" style="margin: 15px;">Gestión de Contratos</h3>

    <!-- Barra de búsqueda -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid ">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar por código" aria-label="Buscar">
                <button class="btn btn-primary" type="submit" style="background-color: #8350F2; 
                border-color:#8350F2">Buscar</button>
            </form>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="content-container">
            <!-- NavBar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <i class="bi bi-list-check"></i> Contratos Vigentes
                    </a>
                </div>
            </nav>

            <!-- Tarjetas -->
            <div class="row">
                <!-- Primera Card -->
                <div class="col-sm-6 mt-3 mb-4">
                    <div class="card">
                        <div class="card-header text-white bg-dark d-flex align-items-center">
                            <h6 class="mb-0">Id contrato</h6>
                            <div class="btn-group dropstart ms-auto">
                                <button type="button" class="btn btn-outline-dark btn-sm dropdown-toggle"
                                    style="background: linear-gradient(50deg, #8350F2, #bab2d4);"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Opciones
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                                    <li><a class="dropdown-item" href="#" style="background-color: #8350F2;">Ver al
                                            detalle</a></li>
                                    <li><a class="dropdown-item" href="#">Monitorear novedad</a></li>
                                    <li><a class="dropdown-item" href="#">Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Finalizar</a></li>
                                    <li><a class="dropdown-item" href="#">Ceder contrato</a></li>
                                    <li><a class="dropdown-item" href="#">Eliminar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <i class="bi bi-house-heart-fill"></i> Ubicación: Rionegro
                            <br>
                            <i class="bi bi-tag-fill"></i> Propietario: Esteban Ortega
                            <br>
                            <i class="bi bi-pin-map-fill"></i> Arrendatario: Natalia López
                        </div>
                    </div>
                </div>

                <!-- Segunda Card -->
                <div class="col-sm-6 mt-3 mb-4">
                    <div class="card">
                        <div class="card-header text-white bg-dark d-flex align-items-center">
                            <h6 class="mb-0">Id contrato</h6>
                            <div class="btn-group dropstart ms-auto">
                                <button type="button" class="btn btn-outline-dark btn-sm dropdown-toggle"
                                    style="background: linear-gradient(50deg, #8350F2, #bab2d4);"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Opciones
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                                    <li><a class="dropdown-item" href="#" style="background-color: #8350F2;">Ver al
                                            detalle</a></li>
                                    <li><a class="dropdown-item" href="#">Monitorear novedad</a></li>
                                    <li><a class="dropdown-item" href="#">Modificar</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Finalizar</a></li>
                                    <li><a class="dropdown-item" href="#">Ceder contrato</a></li>
                                    <li><a class="dropdown-item" href="#">Eliminar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <i class="bi bi-house-heart-fill"></i> Ubicación: Rionegro
                            <br>
                            <i class="bi bi-tag-fill"></i> Propietario: Esteban Ortega
                            <br>
                            <i class="bi bi-pin-map-fill"></i> Arrendatario: Natalia López
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

</body>

</html>