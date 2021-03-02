function  myFunction(y) {
    var x = document.getElementById("myDIV"+y);
    var z= document.getElementById("img"+y);
    if (x.style.display === "none") {
        x.style.display = "block";
       z.src="img/menos.png";
    } else {
        x.style.display = "none";
        z.src="img/mas.png";
    }
}
function verificar(){
    var suma = 0;
    var form=document.getElementById("formulario");
    var los_cboxes = document.getElementsByName('sintomas[]'); 
    for (var i = 0, j = los_cboxes.length; i < j; i++) {
        
        if(los_cboxes[i].checked == true){
        suma++;
        }
    }
     
    if(suma <2){
        form.action='op.php'
    alert('debe seleccionar mas de 3 casilla');
    
    return false;
    }
}