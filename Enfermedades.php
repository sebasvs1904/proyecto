
<?php
require_once 'Enfermedad.php';
class Enfermedades 
{
    private $arrayEnfermedad= array();
    public function __construct() {
        $sintomas=array("Tos con o sin mucosidad"," Dolor en el pecho","Cansancio (fatiga)","Dolor de cabeza leve","Dolores corporales leves","Dolor de garganta");
        $enfe= new Enfermedad("Bronquitis aguda","La bronquitis aguda ocurre cuando se inflaman las vías respiratorias de los pulmones y producen mucosidad en los pulmones. Eso es lo que lo hace toser. La bronquitis aguda, con frecuencia llamada resfriado de pecho, dura menos de 3 semanas y es el tipo más común de bronquitis.","No tan grave",$sintomas,"La bronquitis aguda suele ser provocada por un virus y, con frecuencia, ocurre después de una infección de las vías respiratorias superiores.
        Las bacterias, algunas veces, pueden causar bronquitis aguda, pero incluso en estos casos, NO se recomienda la administración de antibióticos y estos no lo ayudarán a mejorar.");
        $this->arrayEnfermedad[0] = $enfe;
        $sintomas=array("Estornudos","Congestión nasal","Moqueo","Dolor de garganta","Tos","Goteo de mucosidad en la garganta","Lagrimeo","Fiebre");
        $enfe= new Enfermedad("Resfriado común","Infección viral común de la nariz y la garganta.","No tan grave",$sintomas,"Más de 200 virus pueden causar un resfriado, pero los rinovirus son el tipo más común. Los virus que causan los resfriados se pueden propagar de persona a persona por el aire y el contacto personal cercano.");
        $this->arrayEnfermedad[1] = $enfe;
        $sintomas=array("Fiebre","Tos","Dolores corporales","Dolor de garganta","Congestión nasal","Dolor de cabeza","Escalofríos","Fatiga","Vómitos",  "Diarrea");
        $enfe= new Enfermedad("Influenza","enfermedad respiratoria que se propaga de persona a persona. Puede causar enfermedad moderada a grave. Las consecuencias graves de la influenza pueden llevar a la hospitalización o la muerte.","No tan grave, Si sus sintomas son prevalecen acuda a su medico. Máximo 2-3 semas puede durar",$sintomas,"La influenza es causada por un virus que se propaga de persona a persona. Cada año provoca epidemias estacionales." );
        $this->arrayEnfermedad[2] = $enfe;
        $sintomas=array("Enrojecimiento de la piel"," Dolor, sensibilidad o sensación de calor cuando se toca la piel afectada","Inflamación del área afectada");
        $enfe= new Enfermedad("Infecciones de la piel","Las infecciones de la piel ocurren cuando las bacterias infectan la piel y algunas veces el tejido profundo debajo de la piel. La celulitis es un tipo común de infección de la piel que provoca enrojecimiento, inflamación y dolor en el área infectada de la piel.

        Otro tipo de infección de la piel es el absceso, que es una acumulación de pus debajo de la piel.","Moderado",$sintomas,"Por lo general, en la piel de una persona viven tipos diferentes de bacterias. La celulitis o un absceso se pueden producir si hay un corte o una ruptura en la piel que permitan el ingreso de bacterias y causen una infección.");
        $this->arrayEnfermedad[3] = $enfe;
    }
    public function buscarxSintoma($var)
    {
        $i=0;
        $datos=array();
        foreach ($this->arrayEnfermedad as $efe){
            if (count(array_intersect($efe->getSintomas(),$var))>2)
                $datos[$i++]=$efe;
                //print_r(array_intersect($efe->getSintomas(),$var));
        
         }
         return $datos;
    }
    public function buscarT()
    {
      return $this->arrayEnfermedad;
    }
    
}
?>