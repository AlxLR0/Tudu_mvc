<?php

if (!isset($path_components[2])) {
    $path_components[2]='';
}
switch ($path_components[2]) {
    case '':
    case 'mi-lista':
        require_once("./app/tareas/mi-lista/controller/mi-lista.controller.php");
        break;
    case 'registro':
        require_once("./app/tareas/registro/controller/registro.controller.php");
        break;
    
    default:
        header("Location: /mvc/tareas");
        break;
}