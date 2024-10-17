
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperación de Contraseña</title>
    <style>
        body {
            background: url("img/fondo-mora.jpeg") no-repeat center center fixed;
            background-size: cover;
            margin: 0; 



            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(255, 255, 255, 0.8); /* Fondo blanco con opacidad */ 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2); /* Sombra más pronunciada */
            max-width: 400px;
            width: 100%;
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group input[type="submit"] {
            background-color: #451e3c;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group input[type="submit"]:hover {
            background-color: #751c4d;
        }
        .mensaje-bien{
            text-align: center;
            width: 100%;
            color: green;
            margin-top: 15px;
           
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Recuperación de Contraseña</h2>
        <form action="./recovery_password.php" method="POST">
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="nueva_contraseña">Nueva Contraseña:</label>
                <input type="password" id="nueva_contraseña" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmar_contraseña">Confirmar Nueva Contraseña:</label>
                <input type="password" id="confirmar_contraseña" name="password2" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Recuperar Contraseña">
            </div>
            <?php
                session_start();
                include 'conexion db/conexion.php';

                //validar si hay sesion activa
                if (isset($_SESSION['idUser'])) {
                    header('Location: logout.php');
                }

                //inicializar variable de control para logueo
                $mensaje = '';
                if(isset($_POST['password'])){
                    if($_POST['password']==$_POST['password2']){
                        $correo=$_POST['correo'];
                        $pass= $_POST['password'];
                        $query = "UPDATE  tbl_trabajador SET contraseña= '$pass' WHERE  correo='$correo'";
                        $rquery = mysqli_query($conn, $query);
                        echo "<p class='mensaje-bien'>la contraseña a sido actualizada</p>";
                        //header('Location: recupera.php');
                    }else{
                        // no son iguales
                    }
                    
                }
            ?>
        </form>
    </div>
</body>
</html>
