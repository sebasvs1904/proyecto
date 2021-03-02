function Calcular() {
    var k= document.getElementById("kg").value;
    var m= document.getElementById("mtr").value;
    var imc=k/ (Math.pow(m,2));
    var ndiv=document.createElement(div);
    if(imc<=18.5){
        var ncont=document.createTextNode("Bajo de peso");
        newDiv.appendChild(newContent);
    }else if (imc>18.5 && imc<=22.99) {
        var ncont=document.createTextNode("Se encuentra en peso ideal");
        newDiv.appendChild(newContent);
    } else if (imc>=25 && imc <30) {
        var ncont=document.createTextNode("Esta en sobre peso");
        newDiv.appendChild(newContent);
    }
    else {
        var ncont=document.createTextNode("usted esta obeso");
        newDiv.appendChild(newContent);
    }
        
    }

    
