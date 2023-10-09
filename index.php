<?php
    session_start();
    function checkSession() : bool {
        return isset($_SESSION['correo']) && $_SESSION['correo'] != null;
    }

    //Secho checkSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tudu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="container mt-3">
    <!--<h1>hola perro</h1>-->
    
    <?php
    
    $request_url = $_SERVER['REQUEST_URI'];
    $request_method = $_SERVER['REQUEST_METHOD'];
    //echo $request_url;

    $request_components = parse_url($request_url);
    if(count($request_components)> 1)
    {
    parse_str($request_components['query'], $query_params);
    $params = json_encode($query_params);
    }
    $path = ltrim($request_components['path'],"/");
    $path_components = explode("/", $path);
    $components = json_encode($path_components);

    /*echo"
        <h2>Recurso solicitado: {$request_components['path']} </h2>  
        <h3>query params: {$params} </h3> 
        <h3>Componentes url: {$components} </h3>   


         
        
    ";*/

    /*
        tarea: crear otro controller llamado Registro.Controller
        1 vista
        1 modelo
        2 views 
            -la primera con formulario (con action vacio ="" con metodo post method = 'post') con 3 atributos solicitada por get (en el switch)
            -el segundo presenta el modelo 
    */

    require_once("./app.controller.php");

    ?>

<script src="https://unpkg.com/scrollreveal"></script>
</body>
</html>