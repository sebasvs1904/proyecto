<?php
class Enfermedad
{
    protected $nombre;
    protected $descripcion; 
    protected $urgencia;
    protected $sintomas;
    protected $causas;
    function setNombre($valor){$this->nombre = $valor;}
	function getNombre(){return $this->nombre;}
    function setDescripcion($valor){$this->descripcion = $valor;}
	function getDescripcion(){return $this->descripcion;}
	function setUrgencia($valor){$this->urgencia = $valor;}
	function getUrgencia(){return $this->urgencia;}
    function setSintomas($valor){$this->sintomas = $valor;}
	function getSintomas(){return $this->sintomas;}
    function setCausas($valor){$this->causas = $valor;}
	function getCausas(){return $this->causas;}
   public function __construct($nom, $desc,$urge, $sint,$cau) {
       $this->nombre = $nom;
       $this->descripcion=$desc; 
       $this->urgencia=$urge;
       $this->sintomas=$sint;
       $this->causas=$cau;

   }
}
?>
