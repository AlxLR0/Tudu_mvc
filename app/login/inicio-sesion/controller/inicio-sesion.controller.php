<?php

    switch ($request_method) {
        case 'GET':
            require_once("./app/login/inicio-sesion/view/login.php");
            break;
        case 'POST':
            include_once("./app/login/repository/usuarios.repository.php");
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
        
            // Verificar si el correo está registrado
            if (!UsuariosRepository::getInstance()->isCorreoRegistrado($correo)) {
                $error = "El correo no está registrado. Intenta nuevamente.";
            } else {
                // Verificar si las contraseñas coinciden
                if (!UsuariosRepository::getInstance()->validarLogin($correo, $contrasena)) {
                    $error = "La contraseña es incorrecta. Intenta nuevamente.";
                } else {
                    // Contraseña válida, redirigir al usuario a la página de tareas
                    $_SESSION['correo'] = $correo; // Guardar el correo en la sesión
                    header("Location: /tareas");
                    exit;
                }
            }
        
            // Si se produjo un error, muestra el mensaje de error en el mismo formulario de inicio de sesión
            if (isset($error)) {
                require_once("./app/login/inicio-sesion/view/login.php");
            }
            break;

        default:
            header("Location: .");
            break;
    }