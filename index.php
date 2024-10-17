<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Team House </title>
  <!-- Link a Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <?php include 'include/navbar.php' ?>

  <style>
    .card{
      transition: all 0.3s;
    }

    .card:hover{
      transform: scale(1.15);
    }

  </style>
  <!--Contenedor principal cards-->
  <div class="container-fluid mb-5 ms-5 mt-5" >
    <div class="row justify-content-center">
      <div class="col-md-2 d-flex justify-content-center mb-3">
        <div class="card bg-white border border-secondary text-white"
          style="width: 15rem; padding: 18px; height: 24rem; --bs-bg-opacity: 0.2;">
          <img src="img/home-icon-png-transparent-png-removebg-preview.png" class="card-img-top mx-auto my-2 img-fluid"
            style="width: 50%; height: auto;">
          <div class="card-body" style="height: 15rem; overflow-y: auto; padding: 0px;">
            <h5 class="card-title mt-2">GESTIÓN DE INMUEBLES</h5>
            <p class="card-text" style="word-wrap: break-word;">Administra y organiza todas tus propiedades de manera
              eficiente.</p>
              <br>
            <a href="inmueble/inmueble_activo.php" class="btn btn-outline-light" style="border-radius: 2rem">Click aquí</a>
          </div>
        </div>

      </div>
      <div class="col-md-2 d-flex justify-content-center mb-3">
        <div class="card bg-white border border-secondary text-white"
          style="width: 15rem; padding: 18px; height: 24rem; --bs-bg-opacity: 0.2;">
          <img src="img/contratoblanco-dashboard.png" class="card-img-top mx-auto my-2 img-fluid"
            style="width: 50%; height: auto;">
          <div class="card-body" style="height: 15rem; overflow-y: auto; padding: 0px;">
            <h5 class="card-title mt-2">GESTIÓN DE CONTRATOS</h5>
            <p class="card-text">Gestiona tus contratos y agiliza tu flujo de trabajo de forma eficiente.</p>
            <a href="contrato/contrato_activo.php" class="btn btn-outline-light" style="border-radius: 2rem">Click aquí</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 d-flex justify-content-center mb-3">
        <div class="card bg-white border border-secondary text-white"
          style="width: 15rem; padding: 18px; height: 24rem; --bs-bg-opacity: 0.2;">
          <img src="img/clienteblanco-dashboard.png" class="card-img-top mx-auto my-2 img-fluid"
            style="width: 50%; height: auto;">
          <div class="card-body" style="height: 15rem; overflow-y: auto; padding: 0px;">
            <h5 class="card-title mt-2">GESTIÓN DE CLIENTES</h5>
            <p class="card-text">Administra y organiza de manera efectiva la información de tus clientes.</p>
            <a href="gestion_clientes.php" class="btn btn-outline-light" style="border-radius: 2rem">Click aquí</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 d-flex justify-content-center mb-3">
        <div class="card bg-white border border-secondary text-white"
          style="width: 15rem; padding: 18px; height: 24rem; --bs-bg-opacity: 0.2;">
          <img src="img/pesosblanco-dashboard.png" class="card-img-top mx-auto my-2 img-fluid "
            style="width: 50%; height: auto;">
          <div class="card-body" style="height: 15rem; overflow-y: auto; padding: 0px;">
            <h5 class="card-title mt-2">GESTIÓN DE PAGOS</h5>
            <p class="card-text">Administra y organiza de manera efectiva la información de pago tus clientes.</p>
            <a href="gestion_pagos.php" class="btn btn-outline-light" style="border-radius: 2rem">Click aquí</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 d-flex justify-content-center mb-3">
        <div class="card bg-white border border-secondary text-white"
          style="width: 15rem; padding: 18px; height: 24rem; --bs-bg-opacity: 0.2;">
          <img src="img/balanceblanco-dashboard.png" class="card-img-top mx-auto my-2 img-fluid "
            style="width: 50%; height: auto;">
          <div class="card-body" style="height: 15rem; overflow-y: auto; padding: 0px; margin:0">
            <h5 class="card-title mt-2">GESTIÓN FINANCIERA</h5>
            <p class="card-text">Mejora la gestión financiera de todas tus propiedades de manera integral.</p>
            <a href="#" class="btn btn-outline-light mb-2" style="border-radius: 2rem">Click aquí</a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>

</body>

</html>