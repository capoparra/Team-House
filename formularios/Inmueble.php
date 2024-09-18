<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inmueble</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
 
  <body>
  
  <?php include '../navbar.php' ?>
  
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
              <div class="label">Codigo</div>
              <input type="number">
            </div>
            <div class="field">
              <div class="label">Direccion</div>
              <input type="text">
            </div>
            <div class="field">
                <div class="label">Ciudad</div>
                <input type="text">
              </div>
              <div class="field">
                <div class="label">Propietario</div>
                <input type="text">
              </div>
            <div class="field">
              <button class="firstNext next">Siguiente</button>
            </div>
          </div>

          <div class="page">
            <div class="title"></div>
            <div class="field">
              <div class="label">Titulo Inmueble</div>
              <input type="text">
            </div>
            <div class="field">
              <div class="label">Estado</div>
              <input type="text">
            </div>
            <div class="field">
                <div class="label">Tipo Inmueble</div>
                <input type="text">
              </div>
              <div class="field">
                <div class="label">Tipo De Negocio</div>
                <input type="text">
              </div>
            <div class="field btns">
              <button class="prev-1 prev">Atrás</button>
              <button class="next-1 next">Siguiente</button>
            </div>
          </div>

          <div class="page">
            <div class="field">
              <div class="label">Precio De Negocio</div>
              <input type="number">
            </div>
            <div class="field">
              <div class="label">Año De Construccion</div>
              <input type="date">
            </div>
            <div class="field">
                <div class="label">Estado Fisico</div>
                <input type="text">
              </div>
                 <div class="field">
                <div class="label">Numero De Alcobas</div>
                <input type="number">
              </div>
            <div class="field btns">
              <button class="prev-2 prev">Atrás</button>
              <button class="next-2 next">Siguiente</button>
            </div>
          </div>

          <div class="page">
            <div class="title"></div>
            <div class="field">
              <div class="label">Numero De Baños</div>
              <input type="number">
            </div>
            <div class="field">
              <div class="label">Valor Parqueadero</div>
              <input type="number">
            </div>
            <div class="field">
                <div class="label">Area Total En Metros</div>
                <input type="number">
              </div>
              <div class="field">
                <div class="label">Novedades</div>
                <input type="text">
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