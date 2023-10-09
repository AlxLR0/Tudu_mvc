<?php
class Registro{
    private int $id;
    private string $correo;
    private string $contrasena;


    public function __construct(
        int $id = 0,
        string $correo,
        string $contrasena
    ){
        $this-> id = $id;
        $this-> correo = $correo;
        $this-> contrasena = $contrasena;

    }

    
	public function getId(): int {
		return $this->id;
	}

    
	public function getCorreo(): string {
		return $this->correo;
	}
	
	
	public function setCorreo(string $correo) {
		$this->correo = $correo;
		return $this;
	}

	
	public function getContrasena(): string {
		return $this->contrasena;
	}
	
	public function setContrasena(string $contrasena) {
		$this->contrasena = $contrasena;
		return $this;
	}
}