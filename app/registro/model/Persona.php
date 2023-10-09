<?php
class Persona {
    public $nombre;
    public $correo;
    public $anio;
    
    // Constructor
    public function __construct($nombre ="", $correo="", $anio=0) {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->anio = $anio;
    }
    
    
}



