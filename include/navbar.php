<link rel="stylesheet" href="../css/style_index.css">
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
      <span class="navbar-text text-light me-3" id="user-name"><?php 
        session_start();
        echo $_SESSION['nombre']." ".$_SESSION['apellido'];
         ?>
      </span>
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

  <a class="btn me-3" style="margin-left: 16rem; margin-top: 11rem; background-color: #E6C5FF" href="logout.php"
    role="button">Cerrar Sesión</a>

</div>

<body>
  <style>

    body {
      background: url("../img/fondo-mora.jpeg") no-repeat center center fixed;
      background-size: cover;
      margin: 0;
    }

    .navbar{
    width: 100%;    
}

.menu {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;    
    color:blueviolet;
}

.menu .btn-group {
    flex: 1 1 auto;    
    min-width: 150px;   
}

.logo-container {
    display: flex;
    align-items: center;
    height: 70px; /* Ajusta la altura según sea necesario */
}

.logo-container img {
    max-height: 100%; 
}

.navbar-brand {
    margin-left: 5px; /* Espaciado entre logo y texto */
    color: #ffffff !important;
}

.dashboard {
    width: 800px; 
    height: 600px; 
}

.card{
    width:90%;
    max-width: 400px;
    padding: 5rem 2.5rem;
    border-radius: 1rem;
    border:1px solid transparent;
    backdrop-filter:blur(1rem);
    box-shadow: 1.3rem 1.3rem 1.3rem rgba(0,0,0,0.5);
    border-top-color: rgba(225,225,225,0.5);
    border-left-color: rgba(225,225,225,0.5);
    border-bottom-color: rgba(225,225,225,0.1);
    border-right-color: rgba(225,225,225,0.1);    
}

.btn{
    border-radius: 2rem;
}


.btn:hover{
    box-shadow:0 0.3rem 1rem rgba(0,0,0,0.3);
}
  </style>
  
</body>
