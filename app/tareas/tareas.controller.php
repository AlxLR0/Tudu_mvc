<?php
    //session_start();
    if ( !isset($path_components[2]) )
        $path_components[2] = '';
        
    switch ($path_components[2]) {
        case '':
            
        case 'mi-lista':
            if (checkSession()) 
                require_once("./app/tareas/mi-lista/controller/mi-lista.controller.php");
        
            else 
                header('Location: /mvc/login');
            break;

        case 'registro':
            if (checkSession()) 
                require_once("./app/tareas/registro/controller/registro.controller.php");
                
            else
                header('Location: /mvc/login');
            break;
        
        
        default:
           header("Location:/mvc/login");
            break;
    }
    