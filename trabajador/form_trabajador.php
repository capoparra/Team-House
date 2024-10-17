<!DOCTYPE html>
<html lang="en" dir="ltr">
  
<head>
  <meta charset="utf-8">
  <title>trabajador</title>
  <link rel="stylesheet" href="../style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
      <header>Team House</header>
      <div class="progress-bar">
        <div class="step">
          <p>Paso 1</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Paso 2</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Paso 3</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Fin</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form action="#">
          <div class="page slide-page">
            <div class="field">
              <div class="label">Identificacion trabajador</div>
              <input type="number">
            </div>
            <div class="field">
              <div class="label">Nombre</div>
              <input type="text">
            </div>
            <div class="field">
              <button class="firstNext next">Siguiente</button>
            </div>
          </div>

          <div class="page">
            <div class="title"></div>
            <div class="field">
              <div class="label">Apellido</div>
              <input type="text">
            </div>
            <div class="field">
              <div class="label">Telefono</div>
              <input type="tel">
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Atrás</button>
              <button class="next-1 next">Siguiente</button>
            </div>
          </div>

          <div class="page">
            <div class="field">
              <div class="label">Direccion</div>
              <input type="text">
            </div>
            <div class="field">
              <div class="label">Correo</div>
              <input type="email">
            </div>
            <div class="field btns">
              <button class="prev-2 prev">Atrás</button>
              <button class="next-2 next">Siguiente</button>
            </div>
          </div>

          <div class="page">
            <div class="title"></div>
            <div class="field">
              <div class="label">Contraseña</div>
              <input type="password">
            </div>
            <div class="field">
              <div class="label">Codigo Rol</div>
              <input type="number">
            </div>
            <div class="field btns">
              <button class="prev-3 prev">Atrás</button>
              <button class="submit">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="script.js"></script>

  </body>
</html>




<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Team House</title>
  <link rel="stylesheet" href="../style1.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
  <div class="contenedor-padre bg-white mt-5" style="--bs-bg-opacity: 0.2;">
    <form action="registro_contrato.php" method="POST" id="formulario_contrato" class="container">
      <div class="header">
        <h2>CONTRATO</h2>
      </div>
      <div class="row">
        <!-- Primera columna -->
        <div class="col-12 col-md-12">
          <div class="contenedor bg-white" style="--bs-bg-opacity: 0.2;">
            <h3 class="title">Partes Firmantes</h3>


            <div class="row mb-3">
              <div class="col-6">
                <div class="label">Número Identificación</div>
                <input type="number" id="num_identificacion" name="num_identificacion" class="form-control input"
                  required>
              </div>




            </div>
          </div>
        </div>
      </div>
      
        </div>
      </div>



  </div>