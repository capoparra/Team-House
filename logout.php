<?php
session_start(); //inicia una nueva sesión o reanuda la sesión existente. 
session_unset(); //elimina todas las variables de sesión actuales. Las variables no se destruyen pero se vacían.
session_destroy(); //Elimina todas las variables de sesión y borra cualquier archivo de sesión asociado en el servidor.
header('Location: inicio_sesion.php'); //redirigir al usuario a la página inicio_sesion.php
