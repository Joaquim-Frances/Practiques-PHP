<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Array Testing</h1>
<?php

    $dias = ["Lunes", "Martes", "Miercoles", "Jueves"];

 

    for($i=0; $i<sizeOf($dias); $i++){
        echo  $dias[$i] . "<br>";
    }
    echo sizeOf($dias);

    array_push($dias, "Viernes");
    
    for($i=0; $i<sizeOf($dias); $i++){
        echo  $dias[$i] . "<br>";
    }
?>
</body>
</html>
    