<!DOCTYPE html>
<html>
<head>
    <title>Crear Reserva</title>
</head>
<body>
<section class="container">
    <h1>Crear Reserva</h1>
    <form method="POST" action="procesarReserva.php">
        <div>
            <label for="nombre">Nombre y apellido:</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
            <label for="aerolinea">Aerolínea:</label>
            <input type="text" name="aerolinea" id="aerolinea">
        </div>
        <div>
            <label for="vuelo">Vuelo:</label>
            <input type="text" name="vuelo" id="vuelo">
        </div>
        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha">
        </div>
        <h2>Datos de tarjeta de crédito:</h2>
        <div>
            <label for="numero_tarjeta">Número de tarjeta:</label>
            <input type="text" name="numero_tarjeta" id="numero_tarjeta" pattern="[0-9]+">
        </div>
        <div>
            <label for="nombre_tarjeta">Nombre del titular:</label>
            <input type="text" name="nombre_tarjeta" id="nombre_tarjeta">
        </div>
        <div>
            <label for="fecha_vencimiento">Fecha de vencimiento:</label>
            <input type="date" name="fecha_vencimiento" id="fecha_vencimiento">
        </div>
        <div>
            <label for="codigo_seguridad">Código de seguridad:</label>
            <input type="text" name="codigo_seguridad" id="codigo_seguridad">
        </div>
    </form>
    <form action="servicios.php">
        <div class="button-container">
            <input type="submit" name="reservar" value="Reservar">
            <input type="submit" name="cancelar" value="Cancelar">
        </div>
    </form>
</section>
</body>
    <style>
body {
            font-family: Arial, sans-serif;
            background-image: radial-gradient(circle at 50% -20.71%, #a6ffa7 0, #90ffab 12.5%, #76ffb0 25%, #54ffb5 37.5%, #08ffbb 50%, #00fbc2 62.5%, #00f8ca 75%, #00f4d3 87.5%, #00f1dc 100%);
            margin: 20px;
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
.button-container {
            display: flex;
            justify-content: flex-start;
            margin-top: 20px;
        }
        .button-container input[type="submit"] {
            background-color: #00f1dc;
            color: white;
            padding: 10px 16px;
            width: 200px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 15px;
            margin-right: 20px;
        }
h1{
            color: white;
            text-align: center;
        }
        h2 {
            color: white;
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: white;
        }

        input[type="text"],
input[type="date"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #00f1dc;
    color: white;
    padding: 10px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 15px;
    margin-right: 20px;
}

input[type="submit"]:hover {
    background-color: white;
    color: black;
}
    </style>
</body>
</html>
