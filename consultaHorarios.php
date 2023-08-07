<!DOCTYPE html>
<html>
<head>
<title>Fly Smart | Consulta de Horarios</title>
</head>
<body>
<div class="container">
    <!-- Título del formulario -->
    <h1 class="form-title">Consulta de Horarios</h1>
    <!-- Formulario de consulta -->
    <form action="vistas_vuelos.php" method="POST">
        <!-- Sección de información de usuario -->
        <div class="main-user-info">
            <!-- Caja de entrada para el aeropuerto de origen -->
            <div class="user-input-box">
                <label for="origen">Aeropuerto Origen</label>
                <input type="text" id="origen" name="origen">
            </div>
            <!-- Caja de entrada para el aeropuerto de destino -->
            <div class="user-input-box">
                <label for="destino">Aeropuerto Destino</label>
                <input type="text" id="destino" name="destino">
            </div>
        </div>
        <!-- Botón de envío del formulario -->
        <div class="form-submit-btn">
            <input type="submit" value="Consultar">
        </div>
    </form>
    <!-- Formulario para volver a la consulta -->
    <form action="consulta.php" method="post">
        <button type="submit">Volver a consulta</button>
    </form>
</div>
</body>
<style>
/* Estilos generales */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

/* Estilos del cuerpo de la página */
body {
    margin: 0;
    padding: 0;
    /* Fondo degradado */
    background-image: radial-gradient(circle at 50% -20.71%, #a6ffa7 0, #90ffab 12.5%, #76ffb0 25%, #54ffb5 37.5%, #08ffbb 50%, #00fbc2 62.5%, #00f8ca 75%, #00f4d3 87.5%, #00f1dc 100%);
    font-family: sans-serif;
    height: 115vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Estilos de los botones */
button {
    display: block;
    width: 100%;
    margin-bottom: 5px;
    font-size: 15px;
    padding: 10px;
    border: none;
    border-radius: 30px;
    color: white;
    background: #00f1dc;
    text-align: center;
}

button:hover {
    background-color: white;
    color: black;
}

/* Estilos del contenedor principal */
.container {
    width: 90%;
    max-width: 650px;
    background: rgba(0, 0, 0, 0.5);
    padding: 68px;
    margin: auto;
    border-radius: 10px;
    box-shadow: inset -2px 2px 2px white;
}

/* Estilos del título del formulario */
.form-title {
    font-size: 26px;
    font-weight: 600;
    text-align: center;
    padding-bottom: 6px;
    color: white;
    text-shadow: 2px 2px 2px black;
    border-bottom: solid 1px white;
}

/* Estilos de la sección de información del usuario */
.main-user-info {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
}

/* Estilos de las cajas de entrada de usuario */
.user-input-box:nth-child(2n) {
    justify-content: end;
}

.user-input-box {
    display: flex;
    flex-wrap: wrap;
    width: 50%;
    padding-bottom: 15px;
}

.user-input-box label {
    width: 95%;
    color: white;
    font-size: 20px;
    font-weight: 400;
    margin: 5px 0;
}

.user-input-box input {
    height: 40px;
    width: 95%;
    border-radius: 7px;
    outline: none;
    border: 1px solid grey;
    padding: 0 10px;
}

/* Estilos del título de género */
.gender-title {
    color: white;
    font-size: 24px;
    font-weight: 600;
    border-bottom: 1px solid white;
}

/* Estilos de la categoría de género */
.gender-category {
    margin: 15px 0;
    color: white;
}

.gender-category label {
    padding: 0 20px 0 5px;
}

/* Estilos del botón de envío del formulario */
.form-submit-btn input {
    cursor: pointer;
}

.form-submit-btn {
    margin-top: 20px;
}

.form-submit-btn input {
    display: block;
    width: 100%;
    margin-top: 20px;
    margin-bottom: 20px;
    font-size: 15px;
    padding: 10px;
    border: none;
    border-radius: 50px;
    color: white;
    background: #00f1dc;
    text-align: center;
}

.form-submit-btn input:hover {
    background: white;
    color: #030303;
}

/* Estilos para dispositivos móviles *
@media (max-width: 600px) {
    .container {
        min-width: 280px;
    }

    .user-input-box {
        margin-bottom: 12px;
        width: 100%;
    }

    .user-input-box:nth-child(2n) {
        justify-content: space-between;
    }

    .gender-category {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .main-user-info {
        max-height: 380px;
        overflow: auto;
    }

    .main-user-info::-webkit-scrollbar {
        width: 0;
    }
}
//*
/* Estilos para mensajes de alerta */
.alerta {
    text-align: center;
    color: red;
}

/* Estilos para mensajes de éxito */
.success {
    text-align: center;
    color: green;
}
</style>
</html>
