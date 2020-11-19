<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insertarCampos.php" method="post">

    <label>Nombre: <input type="text" name="nombre"></label>
    <label>Apellido: <input type="text" name="apellido"></label>
    <label>Sexo: <input type="text" name="sexo"></label>
    <label>Edad: <input type="text" name="edad"></label>

    <input type="submit" name="enviando" value="Fot-li!">
    </form>

<?php
require ("crearListaBD.php");
require ("deleteBD.php");
   
crearLista();

?>

    
</body>
</html>

