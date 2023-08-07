<?php
    // Inicia una nueva sesión
    session_start();

    // Incluye el archivo de conexión a la base de datos
    include('conexion.php');

    // Verifica si se han enviado los datos de inicio de sesión (nombre de usuario y contraseña)
    if (isset($_POST['login']) && isset($_POST['contrasena'])) {

        // Función para validar y limpiar los datos
        function validate($data){
            $data = trim($data); // Elimina espacios en blanco antes y después del texto
            $data = stripslashes($data); // Elimina las barras invertidas que escapan de los caracteres
            $data = htmlspecialchars($data); // Convierte caracteres especiales en entidades HTML
            return $data;
        }

        // Obtiene y valida los datos de inicio de sesión enviados
        $login = validate($_POST['login']);
        $contrasena = validate($_POST['contrasena']);

        // Verifica si el campo de nombre de usuario está vacío
        if (empty($login)) {
            header("Location: Index.php?error=El Usuario Es Requerido"); // Redirige a la página de inicio con un mensaje de error en la URL
            exit(); // Detiene la ejecución del script
        }
        // Verifica si el campo de contraseña está vacío
        elseif (empty($contrasena)) {
            header("Location: Index.php?error=La clave Es Requerida"); // Redirige a la página de inicio con un mensaje de error en la URL
            exit();
        }
        else {
            // Construye la consulta SQL para verificar las credenciales de inicio de sesión
            $Sql = "SELECT * FROM usuarios WHERE login = '$login' AND contrasena='$contrasena'";

            // Ejecuta la consulta SQL en la base de datos
            $result = mysqli_query($conexion, $Sql);

            // Verifica si se encontró exactamente un registro que coincide con las credenciales
            if (mysqli_num_rows($result) === 1) {
                // Obtiene los datos del usuario
                $row = mysqli_fetch_assoc($result);

                // Verifica si el nombre de usuario y la contraseña coinciden con los datos de la base de datos
                if ($row['login'] === $login && $row['contrasena'] === $contrasena) {
                    // Inicia sesión y almacena los datos del usuario en variables de sesión
                    $_SESSION['login'] = $row['login'];
                    $_SESSION['nombre'] = $row['nombre'];
                    $_SESSION['id'] = $row['id'];

                    // Redirige al usuario a la página de servicios
                    header("Location: servicios.php");
                    exit();
                } else {
                    // Redirige a la página de inicio con un mensaje de error en la URL
                    header("Location: Index.php?error=El usuario o la clave son incorrectas");
                    exit();
                }
            } else {
                // Redirige a la página de inicio con un mensaje de error en la URL
                header("Location: Index.php?error=El usuario o la clave son incorrectas");
                exit();
            }
        }
    } else {
        // Redirige a la página de inicio si no se han enviado los datos de inicio de sesión
        header("Location: Index.php");
        exit();
    }
?>
