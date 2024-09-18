<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Arrendatario</title>
  <link rel="stylesheet" href="../style.css">  
  <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
</head>

<body>
    
  <div class="container">
    <header>Team House</header>
   
    <!-- Progress Bar -->
    <div class="progress-bar">
      <div class="step">
        <p>Paso 1</p>
        <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
          <span>1</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
      <div class="step">
        <p>Paso 2</p>
        <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
          <span>2</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
      <div class="step">
        <p>Fin</p>
        <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
          <span>3</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
    </div>

    <!-- Form Container -->
    <div class="form-outer">
      <form action="registro_arrendatario.php" method="POST">

        <!-- Step 1 -->
        <div class="page slide-page active">
          <h2>Información Básica</h2>
          <div class="field">
            <div class="label">Número Identificación</div>
            <input type="number" id="num_identificacion" name="num_identificacion" required>
          </div>
          <div class="field">
            <div class="label">Tipo Identificación</div>
            <select name="tipo_identificacion" id="tipo_identificacion" required>
              <option value="CC">Cédula de Ciudadanía</option>
              <option value="CE">Cédula de Extranjería</option>
              <option value="PA">Pasaporte</option>
            </select>
          </div>
          <div class="field">
            <div class="label">Nombres</div>
            <input type="text" id="nombre" name="nombre" style="text-transform: uppercase" 
                   class="uppercase" oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="field">
            <div class="label">Apellidos</div>
            <input type="text" id="apellido" name="apellido" style="text-transform: uppercase" 
                   class="uppercase" oninput="this.value = this.value.toUpperCase()" required>
          </div>
          <div class="field btns">
            <button type="button" class="next" data-step="1" style="background-color: blueviolet;">Siguiente</button>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="page">
          <h2>Información de Contacto</h2>
          <div class="field">
            <div class="label">Teléfono</div>
            <input type="number" id="telefono" name="telefono" required>
          </div>
          <div class="field">
            <div class="label">Correo</div>
            <input type="email" id="correo" name="correo" required>
          </div>
          <div class="field btns">
            <button type="button" class="prev" data-step="1" style="background-color: blueviolet;">Atrás</button>
            <button type="button" class="next" data-step="2" style="background-color: blueviolet;">Siguiente</button>
          </div>
        </div>

        <!-- Final Step -->
        <div class="page">
          <h2>Confirmación</h2>
          <div class="field">
            <p>Revisa la información antes de enviar.</p>
          </div>
          <div class="field btns">
            <button type="button" class="prev" data-step="2" style="background-color: blueviolet;">Atrás</button>
            <button type="submit" class="submit" style="background-color: blueviolet;">Enviar</button>
          </div>
        </div>

      </form>
    </div>
  </div>
  <script src="../script.js"></script>
    
</body>
</html>
