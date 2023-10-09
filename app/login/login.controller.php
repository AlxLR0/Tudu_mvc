<?php
if (!isset($path_components[2])) 
$path_components[2] = '';
        
switch ($path_components[2]) {
    case '':
       
        
    case 'login':
        if (!checkSession()) {
            require_once("./app/login/inicio-sesion/controller/inicio-sesion.controller.php");
            
        }else {
            
            header('Location: /mvc/tareas/mi-lista');
        }
        break;

    case 'signup':
        if (checkSession()) {
            
            require_once("./app/login/registro/controller/registro.controller.php");
        }
        header('Location: /mvc/tareas/mi-lista');
        break;
    
    default:
       // header("Location: /mvc/login");
        break;
}
