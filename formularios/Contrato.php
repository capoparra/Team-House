
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contrato</title>
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
                <p>Paso 4</p>
                <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">                
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>  
            <div class="step">
                <p>Fin</p>
                <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
                    <span>5</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>

        <!-- Form Container -->
        <div class="form-outer">
            <form action="#">

                <!-- Step 1 -->
                <div class="page slide-page">
                    <h2>Detalles del Contrato</h2>
                    <div class="field">
                        <div class="label">Código Contrato</div>
                        <input type="number" id="codigo_cont" name="codigo_cont" required>
                    </div>
                    <div class="field">
                        <div class="label">Fecha Inicio</div>
                        <input type="date" id="fecha_inicio" name="fecha_inicio" required>
                    </div>
                    <div class="field">
                        <div class="label">Fecha Finalización</div>
                      <input type="date" id="fecha_finaliza" name="fecha_finaliza" required>
                    </div>
                    <div class="field">
                      <div class="label">Duración</div>
                    <input type="number" id="duracion_meses" name="duracion_meses" required>
                  </div>
                  <div class="field">
                    <div class="label">Valor Canon</div>
                  <input type="number" id="valor_canon" name="valor_canon" required>
                </div>
                    <div class="field btns">
                        <button type="button" class="firstNext next" style="background-color: blueviolet;">Siguiente</button>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="page">
                    <h2>Información Básica</h2>
                    <div class="field">
                        <div class="label">Arrendatario</div>
                        <input type="number" id="arrendatario" name="arrendatario" required>
                    </div>
                    <div class="field">
                        <div class="label">Inmueble</div>
                        <input type="number" id="inmueble" name="inmueble" required>
                    </div>
                    <div class="field">
                      <div class="label">Cláusulas</div>
                      <input type="text" id="clausulas" name="clausulas" required>
                  </div>
                    <div class="field btns">
                        <button type="button" class="prev-1 prev" style="background-color: blueviolet;">Atrás</button>
                        <button type="button" class="next-1 next" style="background-color: blueviolet;">Siguiente</button>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="page">
                    <h2>Garantías y Depósitos</h2>
                    <div class="field">
                        <div class="label">Afianzadora</div>
                        <input type="text" id="afianzadora" name="afianzadora" required>
                    </div>
                    <div class="field">
                      <div class="label">Código de Fianza</div>
                      <input type="number" id="codigo_fianza" name="codigo_fianza" required>
                  </div>
                  <div class="field">
                    <div class="label">Depósito</div>
                    <input type="number" id="valor_deposito" name="valor_deposito" required>
                </div>
                    <div class="field btns" >
                        <button type="button" class="prev-2 prev" style="background-color: blueviolet;">Atrás</button>
                        <button type="button" class="next-2 next" style="background-color: blueviolet;">Siguiente</button>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="page">
                  <h2>Adicionales</h2>
                  <div class="field">
                      <div class="label">Observaciones</div>
                      <textarea id="observaciones" name="observaciones" required></textarea>
                  </div>                  
                  <div class="field btns" >
                      <button type="button" class="prev-3 prev" style="background-color: blueviolet;">Atrás</button>
                      <button type="button" class="next-3 next" style="background-color: blueviolet;">Siguiente</button>
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