<?php

include './conexion db/conexion.php';
$reset_code = $_GET['code'] ?? '';

// Verificar si el código de recuperación existe
$sql = "SELECT * FROM tbl_password_reset WHERE reset_code = ? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $reset_code);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Código de recuperación válido, mostrar el formulario
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recuperación de Contraseña</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Jura:wght@300..700&display=swap');

            body {
                font-family: 'Jura', sans-serif;
                background-color: #d377e9; /* Color de fondo oscuro */
                color: #fff; /* Texto blanco */
                display: flex;
                justify-content: center; /* Centra horizontalmente */
                align-items: center; /* Centra verticalmente */
                height: 100vh; /* Ocupa toda la altura de la ventana */
                margin: 0;
            }
            .container {
                text-align: center; /* Centra el texto dentro del contenedor */
                background-color: #3b3f46; /* Fondo del contenedor */
                padding: 2rem;
                border-radius: 8px; /* Bordes redondeados */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra del contenedor */
                max-width: 400px; /* Limitar el ancho del contenedor */
                width: 100%; /* Ocupa el 100% del ancho disponible */
            }

            h1 {
                margin-bottom: 2rem; /* Espacio debajo del título */
            }

            label {
                display: block;
                margin: 0.5rem 0; /* Espacio arriba y abajo de las etiquetas */
            }

            input[type="password"] {
                padding: 0.5rem;
                border: 1px solid #ccc;
                border-radius: 4px;
                width: calc(100% - 1rem); /* Ancho completo menos padding */
                }
            .btn-primary {
                background-color: transparent; /* Fondo transparente */
                border: 2px solid #fff; /* Borde blanco */
                color: #fff; /* Texto blanco */
                padding: 0.5rem 1rem;
                border-radius: 4px;
                cursor: pointer;
                text-transform: uppercase;
                font-weight: bold;
                font-size: 1rem;
            }

            .btn-primary:hover {
                background-color: #fff;
                color: #282c34;
            }
        </style>
               <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <link rel="stylesheet" type="text/css" href="style_sesion.css">
        
        
       
    </head>
    <body>
        <h1>Recuperación de Contraseña</h1>
        <form id="recoveryForm">
            <input type="hidden" name="reset_code" value="<?php echo htmlspecialchars($reset_code); ?>">
            <label for="new_password">Nueva Contraseña:</label>
            <input type="password" id="contra1" name="contra1" required>
            <br>
            <label for="confirm_password">Confirmar Contraseña:</label>
            <input type="password" id="contra2" name="contra2" required>
            <br>
            <div id="actualizar" class="btn btn-primary btn-outline-light"
                style="background-color: transparent">
                <i class="fas fa-sign-in-alt"></i> Actualizar Contraseña
            </div>
        </form>
    </body>
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function(){ 
                $("#actualizar").click(function(e){
                    e.stopPropagation();
                  console.log ( ) 
                  var contra1 = $("#contra1").val();
                    var contra2 = $("#contra2").val();
                    var code = '<?php echo $reset_code; ?>'
                    if (contra1==contra2) { 

                        $.ajax({
                            type: 'POST',
                            url: 'servicios/recovery2.php',
                            data: { contrasena: contra1, code: code },
                            dataType: 'json',
                            success: function(response) {
                                if (response.status === 'success') {
                                    Swal.fire({
                                        title: 'Recuperación',
                                        text: 'Se ha cambiado la contraseña',
                                        icon: 'success',
                                        confirmButtonText: 'Aceptar'
                                    });
                                } else {
                                    Swal.fire({
                                        title: 'Recuperación',
                                        text: 'Hubo un error intente nuevamente.',
                                        icon: 'error',
                                        confirmButtonText: 'Aceptar'
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.log('Error en la solicitud: ' + error);
                            }
                        });
                        

                    } else{
                        Swal.fire({
                                title: 'Recuperación',
                                text: 'las contraseñas no coinciden.',
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            });

                    }

                    
                    
                
                })






            })

        
    </script>
    </html>

    <?php
} else {
    // Código de recuperación no válido, redirigir al home
    header('Location: index.php');
    exit;
}

$stmt->close();
$conn->close();
?>