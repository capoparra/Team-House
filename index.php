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

</head>

<body>

<?php include 'navbar.php' ?>

  <!--Contenedor principal cards-->
  <div class="container mt-5 mb-3">
    <div class="row justify-content-center mx-auto">
      <div class="col-12 col-md-4 mb-4">
      <div class="card bg-white border border-secondary text-white" style="width: 18rem; --bs-bg-opacity: 0.2;" >
          <img src="img/home-icon-png-transparent-png-removebg-preview.png" class="card-img-top mx-auto my-3 img-fluid"
            alt="..." style="width: 50%; height: auto;">
          <div class="card-body">
            <h5 class="card-title">GESTIÓN DE INMUEBLES</h5>
            <p class="card-text">Administra y organiza todas tus propiedades de manera eficiente.</p>
            <br>
            <a href="gestion_inmueble.php" class="btn btn-primary" style="background-color: #212529; border-color: #9553B6">Click aquí</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <div class="card bg-dark text-white" style="width: 18rem">
          <img src="img/contratoblanco-dashboard.png" class="card-img-top mx-auto my-3 img-fluid" alt="..."
            style="width: 50%; height: auto;">
          <div class="card-body">
            <h5 class="card-title">GESTIÓN DE CONTRATOS</h5>
            <p class="card-text">Simplifica la administración de contratos y optimiza tu flujo de trabajo.</p>
            <a href="gestion_contratos.php" class="btn btn-primary" style="background-color: #4d34a7; border-color: #4d34a7">Click aquí</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <div class="card bg-dark text-white" style="width: 18rem">
          <img src="img/clienteblanco-dashboard.png" class="card-img-top mx-auto my-3 img-fluid" alt="..."
            style="width: 50%; height: auto;">
          <div class="card-body">
            <h5 class="card-title">GESTIÓN DE CLIENTES</h5>
            <p class="card-text">Administra y organiza de manera efectiva la información de tus clientes.</p>
            <a href="gestion_clientes.php" class="btn btn-primary" style="background-color: #4d34a7; border-color: #4d34a7">Click aquí</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <div class="card bg-dark text-white" style="width: 18rem">
          <img src="img/pesosblanco-dashboard.png" class="card-img-top mx-auto my-3 img-fluid " alt="..."
            style="width: 50%; height: auto;">
          <div class="card-body">
            <h5 class="card-title">GESTIÓN DE PAGOS</h5>
            <p class="card-text">Administra y organiza de manera efectiva la información de tus clientes.</p>
            <a href="gestion_pagos.php" class="btn btn-primary" style="background-color: #4d34a7; border-color: #4d34a7"; hover="">Click aquí</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-4">
        <div class="card bg-dark text-white" style="width: 18rem">
          <img src="img/balanceblanco-dashboard.png" class="card-img-top mx-auto my-3 img-fluid " alt="..."
            style="width: 50%; height: auto;">
          <div class="card-body">
            <h5 class="card-title">GESTIÓN FINANCIERA</h5>
            <p class="card-text">Optimiza la administración de todas las operaciones financieras de tus propiedades.</p>
            <a href="#" class="btn btn-primary" style="background-color: #4d34a7; border-color: #4d34a7">Click aquí</a>
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