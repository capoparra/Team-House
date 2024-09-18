<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "team_house";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    echo "Conexión fallida: " . $conn->connect_error;
} else {
}



