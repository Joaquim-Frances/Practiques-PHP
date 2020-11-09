<?php

 class Coche {

    protected $ruedas;
    public $color;
    public $motor;

    function __construct(){

        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }

    function arrancar(){
        echo "Estoy arrancando <br>";

    }
    function girar(){
        echo "Estoy girando <br>";
        
    }
    function frenar(){
        echo "Estoy frenando <br>";
        
    }
    
    function establece_color($color_coche ){

        $this->color = $color_coche;
        echo $this->color . "<br>";
    }
    function getRuedas(){

        
        return $this->ruedas;

    }

    function setColor($color){

        $this->color = $color;
        echo "El color del coche es: " . $color;
    }

}

class Camion extends Coche {

    

    function __construct(){

        $this->ruedas = 8;
        $this->color = "";
        $this->motor = 2600;
    }

    
    
    function establece_color($color_camion ){

        $this->color = $color_camion;
        echo "El color del camion es: " . $this->color . "<br>";
    }
}


?>