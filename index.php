<?php 
//include "op.php";
include_once 'Enfermedades.php';
$i=0;
$obE= new Enfermedades;

?>
<html>
<link rel="stylesheet" href="css/in.css">

<body>
<div class="login-box">
        <h1>Servicio de salud</h1>
        <p>Esta pagina esta destinada a orientar a 
            las personas ante posibles enfermedades que se pueden cpnfundir con el COVID 19.
        
        <br>  <br>A continuacion te presentamos ds opciones, en una puedes elegir cuales son tus sintomas y se mostraran
    posibles enfermdades, en la siguiente opcion, se mostraran algunasde las enfermedades mas comunes enfermedades </p>
      <div class="diseño" id="formato">
      <a href="op.php"><input type="submit" value="Sintomas" onclick="txtOpe.value='1'" name="submit"></a>
      <a href="principal.php"><input type="submit" value="Posibles enfermedades" onclick="txtOpe.value='1'" name="submit"></a>
      </div>
</body>

    </html>