<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $valor1 = true;
    $valor2 = false;

    $resultado = $valor1 and $valor2; //si hiha dos trues es true, si hi ha un false es false.

    if($resultado == true){

        echo "Es correcto";

    }else {

        echo "Incorrecto!";
    }


?>
    
</body>
</html>