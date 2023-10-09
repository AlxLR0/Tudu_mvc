<?php
    switch ($request_method) {
        case 'GET':
            require_once("./app/presentacion/view/index.html");
            break;
        
        // aqui va lo de la segunda vista por post
        
        default:
        header("HTTP/1.1 400 Bad Request");
            break;
    }
?>