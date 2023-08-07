<!DOCTYPE html>
<html>
<head>
<title>Fly Smart | Consultas</title>
<link rel="stylesheet" type="text/css" href="/css/styles_servicios.css">
</head>
<body>
<div class="container">
    <h1>Fly Smart Consultas</h1>
    <ul class="options">
    <li><a href="consultaHorarios.php">Horarios</a></li>
    <li><a href="servicios.php">Volver a Servicios</a></li>
    </ul>
    <div class="logout-btn">
    <a href="index.html"></a>
    <a href="CerrarSesion.php" class="btn btn-danger">Cerrar Sesion</a>
</div>
<style>
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
    width: 100%;
    max-width: 350px;
    background: rgba(0, 0, 0, 0.5);
    padding: 100px;
    margin: auto;
    border-radius: 10px;
    box-shadow: inset -2px 2px 2px white;
}

.options {
    list-style: none;
    padding: 0;
    margin-bottom: 20px;
}

.options li {
    margin-bottom: 10px;
}

.options li a {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 15px;
    padding: 10px;
    background-color: #00f1dc;
    color: white;
    text-decoration: none;
    border-radius: 20px;
}

.options li a:hover {
    background-color: white;
    color: #000;
}

.logout-btn {
    text-align: center;
    margin-top: 40px; /* Aumentamos el espacio entre las opciones y el botón de cerrar sesión */
}

.logout-btn button {
    padding: 10px 20px;
    background-color: #00f1dc;
    color: #000000;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 20px;
}

.logout-btn button:hover {
    background-color: white;
    color: #000000;
}

</style>
</body>
</html>
