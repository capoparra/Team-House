
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admon_Ph</title>
    <link rel="stylesheet" href="style.css">
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
                <p>Paso 3</p>
                <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Fin</p>
                <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>

        <!-- Form Container -->
        <div class="form-outer">
            <form action="#">

                <!-- Step 1 -->
                <div class="page slide-page">
                    <h2>Información Básica</h2>
                    <div class="field">
                        <div class="label">Código</div>
                        <input type="number" id="codigo_urb" name="codigo_urb" required>
                    </div>
                    <div class="field">
                        <div class="label">Nombre Urbanización</div>
                        <input type="text" id="nom_urb" name="nom_urb" required>
                    </div>
                    <div class="field">
                        <div class="label">NIT</div>
                      <input type="text" id="nit" name="nit" required>
                  </div>
                    <div class="field btns">
                        <button type="button" class="firstNext next" style="background-color: blueviolet;">Siguiente</button>
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
                        <button type="button" class="prev-1 prev" style="background-color: blueviolet;">Atrás</button>
                        <button type="button" class="next-1 next" style="background-color: blueviolet;">Siguiente</button>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="page">
                    <h2>Detalles Financieros</h2>
                    <div class="field">
                        <div class="label">Información Bancaria</div>
                        <textarea id="info_cuentaban" name="info_cuentaban" required></textarea>
                  </div>
                    <div class="field btns" >
                        <button type="button" class="prev-2 prev" style="background-color: blueviolet;">Atrás</button>
                        <button type="button" class="next-2 next" style="background-color: blueviolet;">Siguiente</button>
                    </div>
                </div>

                <!-- Final Step -->
                <div class="page">
                    <h2>Confirmación</h2>
                    <div class="field">
                        <p>Revisa la información antes de enviar.</p>
                    </div>
                    <div class="field btns">
                        <button type="button" class="prev-3 prev" style="background-color: blueviolet;">Atrás</button>
                        <button type="submit" class="submit" style="background-color: blueviolet;">Enviar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>