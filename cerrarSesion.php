<?php

    // Iniciar o reanudar la sesión
    session_start();

    // Eliminar todas las variables de sesión
    session_unset();

    // Destruir la sesión actual, para que al salir reenvie al index.php
    session_destroy();

    // Redireccionar al usuario a la página index.php
    header("Location: index.php");