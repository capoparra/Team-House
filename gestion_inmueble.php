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

   <?php include 'navbar.php';   ?>
  <h3 class="Title" style="margin: 15px;">Gestión de Inmuebles</h3>

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

    <!--Botón adicionar-->
    <div class="d-flex justify-content-end">
        <a class="btn btn-primary btn-lg my-3 me-5" href="formularios/Inmueble.php" role="button" 
        style="background-color: #8350F2; border-color: #8350F2">
        <i class="bi bi-plus-circle me-2"></i> CREAR INMUEBLE
        </a>
    </div>

    <div class="container">
        <div class="content-container">
            <!-- NavBar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-4 mb-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                    <i class="bi bi-list-check"></i> Lista de Inmuebles Activos
                    </a>
                </div>
            </nav>

            <!-- Tabla -->
            <div class="table-responsive">
            <table class="table table-striped table table-hover">
                <colgroup>
                    <col style="width: 12%;">
                    <col style="width: 20%;">
                    <col style="width: 30%;">
                    <col style="width: 28%;">
                </colgroup>
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Foto</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="https://via.placeholder.com/100" alt="Foto"></td>
                        <td>
                            <h6>Titulo inmueble</h6>
                            <i class="bi bi-house-heart-fill"></i> Apartamento  
                            <i class="bi bi-tag-fill"></i> Alquiler
                            <br>
                            <i class="bi bi-pin-map-fill"></i> Ubicación 
                            <br>
                            <i class="bi bi-currency-dollar"></i> precio
                        </td>
                        <!-- Dropends Acciones -->
                        <td>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-primary btn-outline-dark" href="formularios/Inmueble.html" role="button" 
                                style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
                                <i class="bi bi-pencil-fill"></i>
                                </a>
                                <a class="btn btn-primary btn-outline-dark ms-2 mx-auto" href="formularios/Inmueble.html" role="button" 
                                style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
                                <i class="bi bi-trash3-fill"></i>
                                </a>
                            </div>                            
                            <div class="btn-group dropend mt-2">                               
                                    <button type="button" class="btn btn-outline-dark btn-sm mt-1"
                                    style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
                                        Opciones
                                    </button>
                                    <button type="button"
                                        class="btn btn-outline-dark dropdown-toggle dropdown-toggle-split mt-1" 
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropend</span>
                                    </button>     
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item active" href="#" style="background-color: #8350F2">Ver al detalle</a></li>
                                    <li><a class="dropdown-item" href="#">Descargar inmueble</a></li>
                                    <li><a class="dropdown-item" href="#">Historial</a></li>
                                    <li><a class="dropdown-item" href="#">Crear contrato</a></li>                                    
                                </ul>
                            </div>
                            

                        </td>
                    </tr>
                    
                    <!-- Agrega más filas según sea necesario -->
                </tbody>
            </table>
        </div>
        </div>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">    
    </script>
        
</body>

</html>