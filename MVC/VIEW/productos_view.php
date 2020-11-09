<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr><td>NOMBRE DEL ARTICULO</td>
            

<?php
    foreach ($matrizProductos as $registro){
        
        echo "<tr><td>" . $registro ["NOMBREARTICULO"] . "</td></tr>";
        
    }

?>
</table>    
</body>
</html>