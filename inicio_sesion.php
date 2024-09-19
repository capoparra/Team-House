<?php
session_start();
include 'conexion db/conexion.php';

//validar si hay sesion activa
if (isset($_SESSION['idUser'])) {
    header('Location: logout.php');
}

//inicializar variable de control para logueo
$mensaje = '';

//preguntar si los inputs del formulario contienen datos por el metodo POST
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    echo $username;
    $query = "SELECT * FROM tbl_trabajador WHERE correo='$username'";
    $rquery = mysqli_query($conn, $query);
    $result = mysqli_fetch_array($rquery);
    if (($_POST['password'] == $result[6])) {
        //inicializamos session
        $_SESSION['idUser'] = $result['cedula'];
        $_SESSION['nombre'] = $result['nombre'];
        $_SESSION['apellido'] = $result['apellido'];
        header('Location: index.php');
    
    } else {

        //no se inicio sesion con exito 
        $mensaje = 'Error';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team House - Inicio de Sesión</title>
    <link rel="stylesheet" type="text/css" href="style_sesion.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jura:wght@300..700&display=swap');
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Black:wght@900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                </div>
                <?php if ($mensaje == 'Error'): ?>
                    <div class="alert alert-warning" role="alert">
                        Usuario o contraseña erronea
                    </div>
                <?php endif; ?>
                <form class="col-12 text-center" method="POST" action="inicio_sesion.php">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Correo electrónico" name="username" />
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" />
                    </div>

                    <div class="row align-items-center justify-content-between">
                        <div class="col-4 remember d-flex align-items-center">
                            <input type="checkbox" id="remember-password">
                            <label for="remember-password" class="ms-1" style="color: #ffffff">Recuérdame</label>
                        </div>
                        <div class="col-6 forgot text-right">
                            <a href="recuperacion.php" style="color: #ffffff">Olvidé mi contraseña</a>
                        </div>
                        <button type="submit" class="btn btn-primary btn-outline-light"
                            style="background-color: transparent">
                            <i class="fas fa-sign-in-alt"></i> Ingresar
                    </div>


                </form>
            </div>
        </div>
    </div>
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>