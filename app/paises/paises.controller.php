<?php
if (!isset($path_components[2])) 
    $path_components[2] = 'por-continente';

switch ($path_components[2]) {
    case 'por-continente':
        require_once("./app/paises/por-continente/view/por-continente.view.php");
        break;
    case 'por-pais':
        require_once("./app/paises/por-pais/view/por-pais.view.php");
        break;
    case 'ver-pais':
        require_once("./app/paises/ver-pais/view/ver-pais.view.php");
        break;
    
    default:
        header("Location: /mvc/paises/por-continente");
        break;
}