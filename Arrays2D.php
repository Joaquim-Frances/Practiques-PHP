<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$alimentos = array("fruta"=>array("tropical"=>"kiwi", "citrico"=>"mandarina", "otros"=>"manzana"), 
                    "leche"=>array("animal"=>"vaca", "vegetal"=>"coco"), 
                    "cereales"=>array("natural"=>"avena", "con_azucar"=>"kellogs"));

echo $alimentos["cereales"]["con_azucar"];
?>
</body>
</html>


    