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
    
    <div class="container mt-5 mb-3">
        <div class="row justify-content-center mx-auto">
        <h1 class="text-center  my-4">
        <small class="text-muted">¿ A cuál deseas gestionar ?</small>
        </h1>
            <div class="col-12 col-md-4 mb-4">
                <div class="card bg-dark text-white" style="width: 18rem; height:20rem">
                    <img src="img/propietario-blanco.png"
                        class="card-img-top mx-auto mt-3 mb-2 img-fluid" alt="..." style="width: 50%; height: auto;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title">PROPIETARIOS</h5>
                        <a href="gestion_inmueble.php" class="btn btn-primary mt-4"
                            style="background-color: #4d34a7; border-color: #4d34a7;">Click aquí</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card bg-dark text-white" style="width: 18rem; height:20rem">
                    <img src="img/arrendatarios.png" class="card-img-top mx-auto my-2 img-fluid" alt="..."
                        style="width: 80%; height: auto;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title">ARRENDATARIOS</h5>
                        <a href="formularios/arrendatario/mostrar_arrendatarios.php" class="btn btn-primary mt-4"
                            style="background-color: #4d34a7; border-color: #4d34a7">Click aquí</a>
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