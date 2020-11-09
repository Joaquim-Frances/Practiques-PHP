<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
   /*  function incrementa(&$valor1){

        $valor1++;

        return $valor1;

    }
$numero = 5;

echo incrementa ($numero) . "<br>";
echo $numero; */

function cambiaMayus($param){

    $param = strtolower($param);

}
$string = "QUIM FRANCES";

cambiaMayus($string);

echo $string;

?>
</body>
</html>