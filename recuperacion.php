


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team House - Inicio de Sesión</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jura:wght@300..700&display=swap');
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Black:wght@900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style_sesion.css">
</head>

<body>
    <h2>TEAM HOUSE</h2>
    <style>
        h2 {
            font-family: 'Roboto Black', Arial, sans-serif;
            font-size: 32px;
            color: #8E44AD;
            /* Color púrpura */
            text-transform: uppercase;
            font-weight: 900;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1), -1px -1px 3px rgba(255, 255, 255, 0.5);
            /* Doble sombra para un efecto brillante */
            letter-spacing: 2px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
    <div class="modal-dialog text-center">
        <div class="col-sm-12 col-md-6 col-lg-4 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="./img/blanca_mela.png"></img>
                
                <form class="col-12 text-center">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Correo electrónico" name="username" />
        
                    </div>
                    <div class="row align-items-center justify-content-between">
                        
                        <div id="enviar" class="btn btn-primary btn-outline-light"
                            style="background-color: transparent">
                            <i class="fas fa-sign-in-alt"></i> Recuperar Contraseña
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
        <script>
            $(document).ready(function(){ 
                $("#enviar").click(function(e){
                    e.stopPropagation();
                  console.log ( ) 
                  var email = $("form input").val();
                    console.log(email);
                    
                $.ajax({
                    type: 'POST',
                    url: 'servicios/recovery.php',
                    data: { email: email },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Recuperación',
                                html: 'Se ha enviado el correo de recuperación ',
                                //html: 'Se ha enviado el correo de recuperación -> <a href="http://localhost/team_house/recuperacion2.php?code='+response.reset_code+'">Link de restauración</href>',
                                icon: 'success',
                                confirmButtonText: 'Aceptar'
                            });
                        } else {
                            Swal.fire({
                                title: 'Recuperación',
                                text: 'el correo no existe en el sistema.',
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log('Error en la solicitud: ' + error);
                    }
                });
                })






            })

        </script>
</body>

</html>