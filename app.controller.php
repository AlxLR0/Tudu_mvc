<?php
    switch ($path_components[$path_index]) {
        case 'formulario':
            require_once("./app/registro/controller/registro.controller.php");
            break;
        case 'presentacion':
            require_once("./app/presentacion/controller/presentacion.controller.php");
            break;
            
        case 'tareas':
            require_once("./app/tareas/tareas.controller.php");
            break;

        case 'login':
            if (!checkSession())          
                require_once("./app/login/login.controller.php");
            else 
                header("Location: /tareas/mi-lista");
            
            break;
        
        case 'signup':
            if (!checkSession())               
                require_once("./app/login/registro/controller/registro.controller.php");
            else 
            header ("Location: /tareas");
            
            break;    
            // require_once("./app/login/registro/controller/registro.controller.php");
            // break;    
        
        case 'logout':
            //session_start();
            session_destroy();
            header("Location: /login");//mover esto si no manda
            //  break;//si no jala me voy a canada
            break;

        case 'app-paises':
            require_once("./app/paises/paises.controller.php");
            break;
        default:
            // header("HTTP/1.1 404 NOT FOUND"); en caso de que truene esta cosa descomentar esto y comentar el de abajo
            header("Location: /presentacion");
            break;
    }
?>