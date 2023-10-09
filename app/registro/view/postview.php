<?php
 //$array = $_POST;
    include_once("./app/registro/model/Persona.php");
 
    //esta cosa captura los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $anio = $_POST["anio"];

    //instancia de la clase Persona
    
    $persona = new Persona($nombre, $correo, $anio);

    // Muestra los resultados
    echo "<h1>Datos procesados:</h1>";
    echo "<h1>Nombre: " . $persona->nombre . "</h1>";
    echo "<h1>Correo: " . $persona->correo . "</h1>";
    echo "<h1>Año de Nacimiento: " . $persona->anio . "</h1>";


 

