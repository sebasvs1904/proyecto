<?php
require_once("Enfermedades.php");
$enfermedades="";
$opcion="";
$opcion=$_REQUEST["txtOpe"];
$enfermedades=$_POST["sintomas"];
if (isset($opcion)&&!empty($opcion)) {
    if($opcion==1)
     include_once 'principal.php';
    else
        $sError = "Faltan datos entrada";
    # code...
}elseif(isset($enfermedades)&&!empty($enfermedades)) {
  include_once 'Resultado.php';
}