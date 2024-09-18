<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ciudad</title>
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
                <p>Fin</p>
                <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>

        <!-- Form Container -->
        <div class="form-outer">
            <form action="#">

                <!-- Step 1 -->
                <div class="page slide-page">
                    <h2>Información Incremento</h2>
                    <div class="field">
                        <div class="label">Porcentaje Incremento</div>
                        <input type="number" id="porcent_incremen" name="porcent_incremen" required>
                    </div>
                    <div class="field">
                        <div class="label">Valor Incremento</div>
                        <input type="number" id="valor_incremen" name="valor_incremen" required>
                    </div>
                    <div class="field">
                        <div class="label">Fecha Incremento</div>
                      <input type="date" id="fecha_increm" name="fecha_increm" required>
                  </div>
                    <div class="field btns">
                        <button type="button" class="firstNext next" style="background-color: blueviolet;">Siguiente</button>
                    </div>
                </div>   
                
                <!-- Step 2 -->
                <div class="page">
                  <h2>Adicionales</h2>
                  <div class="field">
                      <div class="label">Observaciones</div>
                      <textarea id="observaciones" name="observaciones" required></textarea>
                  </div>                  
                  <div class="field btns" >
                      <button type="button" class="prev-2 prev" style="background-color: blueviolet;">Atrás</button>
                      <button type="button" class="next-2 next" style="background-color: blueviolet;">Siguiente</button>
                  </div>
                </div>div>

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