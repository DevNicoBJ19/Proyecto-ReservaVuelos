<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Fly Smart | Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="/css/styles_registro.css" />
</head>
<body>
    <div class="container">
    <h1 class="form-title">Registro de usuario</h1>
    <form action="" method="POST" class="formulario">
    <?php
    include("conexion.php");
    include("registroUsuario.php");
    ?>
        <div class="main-user-info">
            <div class="user-input-box">
                <label for="Name">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre completo" required/>
            </div>
            <div class="user-input-box">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" required/>
            </div>
            <div class="user-input-box">
                <label for="direccion">Direccion</label>
                <input type="text" id="direccion" name="direccion" placeholder="Ingrese su dirección" required/>
            </div>
            <div class="user-input-box">
                <label for="Ciudad">Ciudad</label>
                <input type="text" id="ciudad" name="ciudad" placeholder="Ingrese su ciudad" required/>
            </div>
            <div class="user-input-box">
                <label for="Pais">Pais</label>
                <input type="text" id="Pais" name="pais" placeholder="Ingrese su pais" required/>
            </div>
            <div class="user-input-box">
                <label for="Telefono">Telefono</label>
                <input type="tel" id="telefono" name="telefono" placeholder="Digite su numero telefonico" required/>
            </div>
            <div class="user-input-box">
                <label for="Login">Login</label>
                <input type="text" id="login" name="login" placeholder="Digite su usuario" required/>
            </div>
            <div class="user-input-box">
                <label for="E-mail">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Ingrese su correo electronico" required/>
            </div>
            <div class="user-input-box">
                <label for="Contraseña">Contraseña</label>
                <input type="password" id="contraseña" name="contrasena" placeholder="Digite su contraseña" required/>
            </div>
            <div class="user-input-box">
                <label for="confirmar_contraseña">Confirmar Contraseña</label>
                <input type="password" id="confirmar_contraseña" name="confirmar_contrasena" placeholder="Confirma tu contraseña" required/>
            </div>
        </div>
        <div class="form-submit-btn">
            <input type="submit" value="Registrate">
        </div>
        <button type="button" onclick="window.location.href='index.php'">Volver al login</button>
        </div>
        <script>
    // Declaración de la función "validarContraseñas"
    function validarContraseñas() {
        // Obtiene el valor del campo de contraseña
        var contrasena = document.getElementById("contraseña").value;
        // Obtiene el valor del campo de confirmación de contraseña
        var confirmarContrasena = document.getElementById("confirmar_contrasena").value;
        // Compara las contraseñas ingresadas
        if (contrasena !== confirmarContrasena) {
            // Si las contraseñas no coinciden, muestra una alerta
            alert("Las contraseñas no coinciden");
            // Retorna "false" para evitar el envío del formulario
            return false;
        }
        // Si las contraseñas coinciden, permite el envío del formulario
        return true;
    }
</script>
    </body>
    <style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}
*{
    font-family: 'Lato', sans-serif;
    font-family: 'PT Sans', sans-serif;
    box-sizing: border-box;
}
body {
    margin: 0;
    padding: 0;
    background-image: radial-gradient(circle at 50% -20.71%, #a6ffa7 0, #90ffab 12.5%, #76ffb0 25%, #54ffb5 37.5%, #08ffbb 50%, #00fbc2 62.5%, #00f8ca 75%, #00f4d3 87.5%, #00f1dc 100%);
    font-family: 'Open Sans', sans-serif;
    height: 115vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
button{
    display: block;
    width: 100%;
    margin-bottom: 5px;
    font-size: 15px;
    padding: 10px;
    border: none;
    border-radius: 50px;
    color: white;
    background: #00f1dc;
    text-align: center;
}
button:hover{
    background-color: white;
    color: black;
}
 /* Estilos del contenedor principal */
.container{
    width: 90%;
    max-width: 750px;
    background: rgba(0, 0, 0, 0.5);
    padding: 38px;
    margin: 20px 0;
    border-radius: 30px;
    box-shadow: inset -2px 2px 2px white;
}
/* Estilos del título del formulario */
.form-title{
    font-size: 30px;
    font-weight: 600;
    text-align: center;
    padding-bottom: 6px;
    color: white;
    text-shadow: 2px 2px 2px black;
    border-bottom: solid 1px white;
}
/* Estilos de la información principal del usuario */
.main-user-info{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
}
/* Estilos de cada caja de entrada de usuario */
.user-input-box:nth-child(2n){
    justify-content: end;
}

.user-input-box{
    display: flex;
    flex-wrap: wrap;
    width: 50%;
    padding-bottom: 15px;
}

.user-input-box label{
    width: 95%;
    color: white;
    font-size: 20px;
    font-weight: 400;
    margin: 4px 0;
}

.user-input-box input{
    height: 40px;
    width: 95%;
    border-radius: 7px;
    outline: none;
    border: 1px solid grey;
    padding: 0 10px;
}
/* Estilos del título de género */
.gender-title{
    color:white;
    font-size: 24px;
    font-weight: 600;
    border-bottom: 1px solid white;
}
/* Estilos de la categoría de género */
.gender-category{
    margin: 15px 0;
    color: white;
}

.gender-category label{
    padding: 0 20px 0 5px;
}

.gender-category label,
.gender-category input,
.form-submit-btn input{
    cursor: pointer;
}
/* Estilos del botón de envío del formulario */
.form-submit-btn {
    margin-top: 5px; /* ¡RECORDAR! Margin-top este valor para controlar el espacio entre el botón y los campos del formulario */
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-submit-btn input{
    display: block;
    width: 100%;
    margin-top: 5px;
    margin-bottom: 20px;
    font-size: 15px;
    padding: 10px;
    border: none;
    border-radius: 50px;
    color: white;
    background: #00f1dc;
    text-align: center;
}


.form-submit-btn input:hover{
    background: white;
    color: #030303
}

/*@media(max-width: 600px){ /* Estilos para dispositivos móviles *
    .container{
        min-width: 280px;
    }

    .user-input-box{
        margin-bottom: 12px;
        width: 100%;
    }

    .user-input-box:nth-child(2n){
        justify-content: space-between;
    }

    .gender-category{
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .main-user-info{
        max-height: 380px;
        overflow: auto;
    }

    .main-user-info::-webkit-scrollbar{
        width: 0;
    }
}*/
/* Estilos para mensajes de alerta */
.alerta{
    text-align: center;
    color: red;
}
/* Estilos para mensajes de éxito */
.success{
    text-align: center;
    color: green;
}
</style>
</html>
</form>
</div>
</body>
</html>
