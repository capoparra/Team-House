<link rel="stylesheet" href="../css/style_index_adm.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<nav class="navbar mb-4">
  <div class="container-fluid">
    <div class="d-flex align-items-center">
      <div class="logo-container" href="index.php">
        <img src="../img/image (5).png" alt="Logo" class="img-fluid">
      </div>
      <a class="navbar-brand navbar-text" href="../index.php">
        <h4>Team House</h4>
      </a>
    </div>
    <!-- Botón que activa el offcanvas -->
    <div class="justify-content-end">
      <span class="navbar-text text-light me-3" id="user-name">Nombre Cliente</span>
      <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
        aria-controls="offcanvasRight" style="border-radius: 2rem">Menú</button>

    </div>
  </div>
</nav>
<!--Offcanvas!-->
<div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel"
  style="background: linear-gradient(-90deg, #C170FF, #E6C5FF)">
  <div class="offcanvas-header">
    <h5 class="text-dark" id="offcanvasRightLabel">Team House</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <style>
    .dropdown-menu a:hover {
      background-color: #C170FF;
    }
  </style>

  <!-- Boton Inmuebles !-->
  <div class="btn-group dropend mt-5">
    <button type="button" class="btn btn-transparent ms-3 dropdown-toggle" data-bs-toggle="dropdown"
      aria-expanded="false" style="margin-right: 600px">
      Inmuebles
    </button>
    <ul class="dropdown-menu bg-dark">
      <li><a class="dropdown-item link-light" href="#">Regular link</a></li>
      <li><a class="dropdown-item link-light" href="#">Active link</a></li>
      <li><a class="dropdown-item link-light" href="#">Another link</a></li>
    </ul>
  </div>

  <!-- Boton Inmuebles !-->
  <div class="btn-group dropend mt-3">
    <button type="button" class="btn btn-transparent ms-3 dropdown-toggle" data-bs-toggle="dropdown"
      aria-expanded="false" style="margin-right: 600px">
      Contratos
    </button>
    <ul class="dropdown-menu bg-dark">
      <li><a class="dropdown-item link-light" href="#">Regular link</a></li>
      <li><a class="dropdown-item link-light" href="#">Active link</a></li>
      <li><a class="dropdown-item link-light" href="#">Another link</a></li>
    </ul>
  </div>

  <!-- Boton Inmuebles !-->
  <div class="btn-group dropend mt-3">
    <button type="button" class="btn btn-transparent ms-3 dropdown-toggle" data-bs-toggle="dropdown"
      aria-expanded="false" style="margin-right: 600px">
      Clientes
    </button>
    <ul class="dropdown-menu bg-dark">
      <li><a class="dropdown-item link-light" href="#">Regular link</a></li>
      <li><a class="dropdown-item link-light" href="#">Active link</a></li>
      <li><a class="dropdown-item link-light" href="#">Another link</a></li>
    </ul>
  </div>

  <!-- Boton Inmuebles !-->
  <div class="btn-group dropend mt-3">
    <button type="button" class="btn btn-transparent ms-3 dropdown-toggle" data-bs-toggle="dropdown"
      aria-expanded="false" style="margin-right: 600px">
      Pagos
    </button>
    <ul class="dropdown-menu bg-dark">
      <li><a class="dropdown-item link-light" href="#">Regular link</a></li>
      <li><a class="dropdown-item link-light" href="#">Active link</a></li>
      <li><a class="dropdown-item link-light" href="#">Another link</a></li>
    </ul>
  </div>

  <!-- Boton Inmuebles !-->
  <div class="btn-group dropend mt-3">
    <button type="button" class="btn btn-transparent ms-3 dropdown-toggle" data-bs-toggle="dropdown"
      aria-expanded="false" style="margin-right: 600px">
      Finanzas
    </button>
    <ul class="dropdown-menu bg-dark">
      <li><a class="dropdown-item link-light" href="#">Regular link</a></li>
      <li><a class="dropdown-item link-light" href="#">Active link</a></li>
      <li><a class="dropdown-item link-light" href="#">Another link</a></li>
    </ul>
  </div>

  <a class="btn me-3" style="margin-left: 16rem; margin-top: 11rem; background-color: #E6C5FF" href="#"
    role="button">Cerrar Sesión</a>

</div>

<body>
  <style>
    body {
      background: url("../img/fondo-mora.jpeg") no-repeat center center fixed;
      background-size: cover;
      margin: 0;
    }
  </style>
  
</body>