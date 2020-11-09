<style>
.resultados{
  text-align: center;
  color: red;
  font-weight: bold;
  font-size: xx-large;
  font-family: Helvetica;


}

</style>


<?php

if(isset($_POST["button"])){

  $valor1 = $_POST["num1"];
  $valor2 = $_POST["num2"];
  $operacion = $_POST["operacion"];

  calcular($operacion);

}

function calcular($mates){
 
  
    if(!strcmp("Suma", $mates)){

      global $valor1;
      global $valor2;

      $resultado = $valor1 + $valor2;
  
      echo "<p class='resultados'>El resultado es: $resultado </p>";
  
    }
  
    if(!strcmp("Resta", $mates)){

      global $valor1;
      global $valor2;
  
      $resultado = $valor1 - $valor2;
  
      echo "<p class='resultados'>El resultado es: $resultado </p>";
    }
  
    if(!strcmp("Multiplicación", $mates)){

      global $valor1;
      global $valor2;
  
      $resultado = $valor1 * $valor2;
  
      echo "<p class='resultados'>El resultado es: $resultado </p>";
    }
  
    if(!strcmp("División", $mates)){

      global $valor1;
      global $valor2;
  
      $resultado = $valor1 / $valor2;
  
      echo "<p class='resultados'>El resultado es: $resultado </p>";
    }
  
    if(!strcmp("Módulo", $mates)){

      global $valor1;
      global $valor2;
  
      $resultado = $valor1 % $valor2;
  
      echo "<p class='resultados'>El resultado es: $resultado </p>";
    }


  }






?>



