<?php
class Enfermo
{
    protected $sintomas;
    protected $edad; 
    protected $estatura;
    protected $nombre;
    protected $apellido; 
    function setNombre($valor){
		$this->nombre = $valor;
	}
	function getNombre(){
		return $this->nombre;
	}

    function setSintomas($valor){
		$this->sintomas = $valor;
	}
	function getSintomas(){
		return $this->sintomas;
	}

    function setEstatura($valor){
		$this-> estatura= $valor;
	}
	function getEstatura(){
		return $this->estatura;
	}

    function setEdad($valor){
		$this->edad = $valor;
	}
	function getEdad(){
		return $this->edad;
	}

    function setApellido($valor){
		$this->apellido = $valor;
	}
	function getApellido(){
		return $this->apellido;
	}
    
}

?>