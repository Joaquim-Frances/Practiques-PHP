<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require ("OOP_02_vahiculos.php");

    $man = new Camion();
    $man->establece_color("Blanco");
    $man->arrancar();
    $furgo = new Coche();
    echo $furgo->getRuedas() . "<br>";
    $furgo->setColor("Vermell");
    echo "<br>";
    echo "El camion tiene " . $man->getRuedas() . "ruedas. <br>";
?>
</body>
</html>












