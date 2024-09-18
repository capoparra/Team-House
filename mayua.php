<?php
session_start();
include 'conexion db/conexion.php';

// Verificar si ya hay sesión activa
if (isset($_SESSION['idUser'])) {
    header('Location: logout.php');
    exit;
}

// Inicializar variables de control para el inicio de sesión
$mensaje = '';

// Comprobar si se ha enviado el formulario
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Consultar usuario en la base de datos
    $query = "SELECT * FROM tbl_trabajador WHERE correo='$username'";
    $rquery = mysqli_query($conn, $query);
    $result = mysqli_fetch_array($rquery);

    // Validar la contraseña
    if ($password == $result[6]) {
        // Inicializar sesión
        $_SESSION['idUser'] = $result['cedula'];
        
        // Verificar si el usuario quiere ser recordado
        if (!empty($_POST['remember'])) {
            // Establecer una cookie para recordar al usuario
            setcookie('username', $username, time() + (86400 * 30), "/"); // Cookie expira en 30 días
            setcookie('password', $password, time() + (86400 * 30), "/"); // Cookie expira en 30 días
        } else {
            // Borrar las cookies si el usuario no las quiere recordar
            setcookie('username', '', time() - 3600, "/");
            setcookie('password', '', time() - 3600, "/");
        }

        header('Location: index.php');
        exit;
    } else {
        // No se inició sesión con éxito
        $mensaje = 'Error';
    }
}

// Rellenar el campo de nombre de usuario si la cookie está presente
$savedUsername = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
$savedPassword = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
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
                        Usuario o contraseña erróneos
                    </div>
                <?php endif; ?>
                <form class="col-12 text-center" method="POST" action="inicio_sesion.php">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Correo electrónico" name="username" value="<?php echo htmlspecialchars($savedUsername); ?>" />
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" value="<?php echo htmlspecialchars($savedPassword); ?>" />
                    </div>
                    <input type="hidden" name="remember" value="0">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-4 remember d-flex align-items-center">
                            <input type="checkbox" id="remember-password" name="remember" value="1" <?php if (!empty($_COOKIE['username'])) echo 'checked'; ?>>
                            <label for="remember-password" class="ms-1" style="color: #ffffff">Recuérdame</label>
                        </div>
                        <div class="col-6 forgot text-right">
                            <a href="recuperacion.php" style="color: #ffffff">Olvidé mi contraseña</a>
                        </div>
                        <button type="submit" class="btn btn-primary btn-outline-light" style="background-color: transparent">
                            <i class="fas fa-sign-in-alt"></i> Ingresar
                        </button>
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



