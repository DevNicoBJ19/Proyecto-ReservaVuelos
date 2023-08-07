<?php

if (empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["direccion"]) || empty($_POST["ciudad"]) || empty($_POST["pais"]) || empty($_POST["telefono"]) || empty($_POST["login"]) || empty($_POST["email"]) || empty($_POST["contrasena"])) {
    echo '<div class="success">Usuario no registrado</div>';
} else {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $telefono = $_POST['telefono'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $Sql=$conexion->query("INSERT INTO usuarios (nombre, apellido, direccion, ciudad, pais, telefono, login, email, contrasena)
    VALUES ('$nombre', '$apellido', '$direccion', '$ciudad', '$pais', '$telefono', '$login', '$email', '$contrasena')");
    if ($Sql==1) {
        echo '<div class="success">Usuario registrado correctamente</div>';
    } else {
        echo '<div class="alerta">Usuario no registrado</div>';
    }
}
?>
