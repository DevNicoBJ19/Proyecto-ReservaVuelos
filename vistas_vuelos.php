<!DOCTYPE html>
<html>
<head>
    <title>Fly Smart | Resultados de la consulta</title>
</head>
<body>
    <div class="container">
    <h1 style="margin-bottom: 50px;">Resultados de la consulta</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vuelos";

// Verificar si se han enviado los datos desde el formulario
if (isset($_POST['origen']) && isset($_POST['destino'])) {
    // Conectar a la base de datos y realizar la consulta
    $conexion = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    // Escapar los valores para evitar inyección de SQL
    $origen = mysqli_real_escape_string($conexion, $origen);
    $destino = mysqli_real_escape_string($conexion, $destino);
    // Construir la consulta
    $consulta = "SELECT * FROM vuelo WHERE aeropuertoOrigen_nombre = '$origen' AND aeropuertoDestino_nombre = '$destino'";
    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $consulta);
    // Verificar si hay resultados
    if (mysqli_num_rows($resultado) > 0) {
        // Si se encontraron resultados en la consulta
        // Mostrar los resultados en una tabla
        echo '<table class="table table-striped table-success table-hover table-borderless table-sm table-responsive">
                <thead>
                    <tr>
                        <th style="color: white;">Aeropuerto de origen</th>
                        <th style="color: white;">Aeropuerto de destino</th>
                        <th style="color: white;">Fecha de llegada</th>
                        <th style="color: white;">Fecha de salida</th>
                    </tr>
                </thead>
                <tbody>';
        // Iterar sobre los resultados obtenidos
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            // Mostrar los datos de cada fila en las celdas correspondientes
            echo '<td style="color: red;">' . $fila['aeropuertoOrigen_nombre'] . "</td>";
            echo '<td style="color: blue;">' . $fila['aeropuertoDestino_nombre'] . "</td>";
            echo '<td style="color: orange;">' . $fila['fecha_llegada'] . "</td>";
            echo '<td style="color: orange;">' . $fila['fecha_salida'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>
            </table>";
    } else {
        // Si no se encontraron resultados en la consulta
        echo '<p style="color: white;">No se encontraron vuelos para la consulta especificada.</p>';
    }
}
    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
?>
    <form action="consulta.php" method="post">
    <button type="submit">Volver a consultas</button>
    </form>
    <form action="consultaHorarios.php" method="post">
    <button type="submit">Volver a los horarios</button>
    <form action="index.php" method="post">
    <button type="submit">Cerrar sesión</button>
    </form>
</div>
</body>
</html>
<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body {
    margin: 0;
    padding: 0;
    background-image: radial-gradient(circle at 50% -20.71%, #a6ffa7 0, #90ffab 12.5%, #76ffb0 25%, #54ffb5 37.5%, #08ffbb 50%, #00fbc2 62.5%, #00f8ca 75%, #00f4d3 87.5%, #00f1dc 100%);
    font-family: sans-serif;
    height: 115vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
h1 {
    text-align: center;
    color: #ffffff;
}
.container {
    width: 50%;
    max-width: 650px;
    background: rgba(0, 0, 0, 0.5);
    padding: 68px;
    margin: auto;
    border-radius: 10px;
    box-shadow: inset -2px 2px 2px white;
}
.container p {
    color: white;
    font-size: 24px;
    margin-bottom: 10px;
}
button {
    display: block;
    width: 100%;
    margin-top: 20px; /* Ajusta el valor para mover los botones hacia abajo */
    margin-bottom: 20px; /* Ajusta el valor para separar los botones entre sí */
    font-size: 15px;
    padding: 10px;
    border: none;
    border-radius: 20px;
    color: white;
    background: #00f1dc;
    text-align: center;
}
button:hover {
    background-color: white;
    color: black;
}
.form-container {
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
}
.form-container button {
    margin-top: 0;
    margin-bottom: 0;
}
@media (max-width: 600px) {
    .container {
        min-width: 280px;
    }
    .form-container {
        flex-direction: column;
    }
}
    </style>
</html>
