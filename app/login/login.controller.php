<?php
if (!isset($path_components[$path_index + 1])) 
$path_components[$path_index + 1] = '';
        
switch ($path_components[$path_index + 1]) {
    case '':
       
        
    case 'login':
        if (!checkSession()) {
            require_once("./app/login/inicio-sesion/controller/inicio-sesion.controller.php");
            
        }else {
            
            header('Location: /tareas/mi-lista');
        }
        break;

    case 'signup':
        if (checkSession()) {
            
            require_once("./app/login/registro/controller/registro.controller.php");
        }
        header('Location: /tareas/mi-lista');
        break;
    
    default:
       header("Location: /login");
        break;
}
