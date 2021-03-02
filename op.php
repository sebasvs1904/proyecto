<?php
include_once 'Enfermedades.php';
$obE= new Enfermedades;
$o=$obE->buscarT();
?>
<html>
<link rel="stylesheet" href="css/op.css">
<script src="js/oculta.js">
</script>
<body>
<div class="login-box">
    <div class="ventana" id="vent"> 
<form action="Control.php" method="POST"id="formulario">
            <label> Seleciona los sintomas que padece</label><br>
       <?php foreach( $o as $dato){
           foreach($dato->getSintomas() as $op){
           ?>
           <input type="checkbox" name="sintomas[]" value="<?php echo $op ?>"/><?php echo $op ?>
           <br>
           <?php 
           }}
           ?>
           <input type="hidden"  name="txtOpe">
           <input type="submit" value="Omitir" onclick="txtOpe.value='1'" name="submit">
            <input type="submit" value="Enviar" name="Enviar"  onclick="verificar()">


        </form>
    </body>
    
    </div>
    <div class="contenedor" id="contenedor">
        <h1>Lista de sintomas </h1>
        <p>
            Al dar click en el bonton de "Sintomas" se mostrara una lista de los sintomas mas frecuentes. 
            Selecciona los sintomas que tienes y continuacion da click en enviar 
        </p>
        <a href="javascript:abrir()">Sintomas </a>
        
        </div>

           <SCript>
               function abrir() {
                   document.getElementById("vent").style.display="block";
               }
               function cerrar() {
                document.getElementById("vent").style.display="none";   
               }
           </SCript>
</div>           
</html>
