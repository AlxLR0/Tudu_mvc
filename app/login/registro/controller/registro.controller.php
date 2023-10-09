<?php
    switch ($request_method) {
        case 'GET':
            require_once("./app/login/registro/view/registro_user.php");
            break;
        
        case 'POST':
            include_once("./app/login/repository/usuarios.repository.php");
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];
            $repetirContrasena = $_POST['repetirContrasena'];

             
             

        // Verificar si el correo ya está registrado
        if (UsuariosRepository::getInstance()->isCorreoRegistrado($correo)) {
            // Establecer mensaje de error si el correo ya está registrado
            $error = "El correo ya está registrado. Intenta nuevamente.";
        } else {
            // Verificar si las contraseñas coinciden
            if ($contrasena !== $repetirContrasena) {
                // Establecer mensaje de error si las contraseñas no coinciden
                $error = "Las contraseñas no coinciden.";
            } else {
                $registro = new Registro(0, $correo, $contrasena);

                if (!UsuariosRepository::getInstance()->saveNewUser($registro)) {
                    //  Establecer mensaje de error si hay un error al registrar el usuario
                    $error = "Error al registrar el usuario: " . UsuariosRepository::getInstance()->getMysqli()->error;
                }
            }
        }

        // Si se produjo un error, muestra el mensaje de error en el mismo formulario
        if (isset($error)) {
            require_once("./app/login/registro/view/registro_user.php");
        } else {
            // No se produjo un error, redirige a otra página
            header("Location: /mvc/login"); 
        }
        break;
           
        
        default:
            header("Location: /mvc/login");
            break;
    }