<?php
include_once 'Enfermedades.php';

$i=0;
//$sintoma=$_POST["sintomas"];
//print_r($sintoma);
$obE= new Enfermedades;
$o=$obE->buscarT();
//print_r($o);
?>
<!DOCTYPE html>
    <head>
    <LINK REL=StyleSheet HREF="css/oculta.css" TYPE="text/css" >
    <LINK REL=StyleSheet HREF="css/estilobasico.css" TYPE="text/css" >
    <script src="js/oculta.js"></script>
    <div id="agrupar">
    </head>
    <body>
       <?php
       include_once 'nav.html';
       include_once "aside.html";
       ?>
       <section id="seccion">
       <?php
       if ($o==null){
         echo "<article><p>No se encontro ningun resultado</p></article>";
      }
      $i=0;
        foreach( $o as $dato){
           ?>
           <article>
              
         <button onclick="myFunction(<?php echo ++$i;?>)" style='width:100%; height:40'><h1 Style="align:left"> Nombre: <?php echo $dato->getNombre();?> 
       
      <img id="img<?php echo $i;?>" src="img/mas.png" height=20></button></h1>
        <div id="myDIV<?php echo $i;?>" style="border:1px solid black;  display:none ">
        <h2> Descripción: </h2> <p><?php echo $dato->getDescripcion();?></p>
        <h2> Sintomas </h2>
        <p>Algunos sintomas que puede ocacionar la enfermedad de la <?php echo $dato->getNombre();?> son: </p>
        <ul><?php
                foreach ($dato->getSintomas() as $sintoma){

    ?>
    <li> <?php echo $sintoma;}?></li>
                </ul>
    <h2> Nivel de Emergencia:</h2><p><?php echo $dato->getUrgencia();?>

    </div>
                </article>
       <?php
       }
       
       include_once "footer.html";
       ?>
      
      
      </section>
      </div >
</body>
