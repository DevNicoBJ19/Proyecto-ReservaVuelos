<?php

// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuelos";

// Crear la conexión
$conexion = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexion) {
    echo "Conexion fallida";
}
?>