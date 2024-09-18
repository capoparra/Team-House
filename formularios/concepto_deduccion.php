<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conceptos Deducción</title>
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
                <p>Fin</p>
                <div class="bullet" style="background: linear-gradient(50deg, #8350F2, #bab2d4)">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>

        <!-- Form Container -->
        <div class="form-outer">
            <form action="#">

                <!-- Step 1 -->
                <div class="page slide-page">
                    <h2>Deducción</h2>
                    <div class="field">
                        <div class="label">Código</div>
                        <input type="number" id="codigo_dep" name="codigo_dep" required>
                    </div>
                    <div class="field">
                        <div class="label">Concepto Deducción</div>
                        <input type="text" id="departamento" name="departamento" required>
                    </div>
                    <div class="field">
                        <div class="label">Valor Deducción</div>
                        <input type="text" id="valor_aplicable" name="valor_aplicable" required>
                    </div>
                    <div class="field">
                        <div class="label">Descripción</div>
                        <textarea id="descripcion" name="descripcion" required></textarea>
                    </div>
                    <div class="field btns">
                        <button type="button" class="firstNext next" style="background-color: blueviolet;">Siguiente</button>
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