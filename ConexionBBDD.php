<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $db_direccion = "localhost";
    $db_name = "pruebas";
    $db_user = "root";
    $db_pass = "";

    $conexion = mysqli_connect ($db_direccion, $db_user, $db_pass, $db_name);

    $consulta = "SELECT * FROM DATOSPERSONALES";
    $resultados = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_row($resultados);
    echo $fila[0] . "<br>";
    echo $fila[1] . "<br>";
    echo $fila[2] . "<br>";
    echo $fila[3] . "<br>";
    
?>
</body>
</html>