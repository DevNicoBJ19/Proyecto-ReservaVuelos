<?php

$origen = $_POST['origen'];
$destino = $_POST['destino'];

// Escapar los valores para evitar inyección de SQL
$origen = mysqli_real_escape_string($conexion, $origen);
$destino = mysqli_real_escape_string($conexion, $destino);

// Realizar la consulta a la base de datos
$Sql=$conexion->query("SELECT * FROM vuelos WHERE aeropuertoOrigen_nombre = '$origen' AND aeropuertoDestino_nombre = '$destino'");
$resultado = mysqli_query($conexion, $sql);

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Redirigir a la página de visualización de vuelos
    header('Location: vistas_vuelos.php');
    exit();
} else {
    echo 'Error al realizar la consulta: ' . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
