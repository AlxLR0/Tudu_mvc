<?php
    switch ($request_method) {
        case 'GET':
            require_once("./app/registro/view/formulario.html");
            break;
       
        case 'POST':
            require_once("./app/registro/view/postview.php");
            break;
        
        default:
        header("HTTP/1.1 400 Bad Request");
            break;
    }
?>