<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $busqueda = $_GET['buscar'];



    require ("../ConexionBBDD.php");

    $conexion = mysqli_connect ($db_direccion, $db_user, $db_pass);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar conla Base de Datos";
        exit();
    }
    mysqli_select_db($conexion, $db_name) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion, "utf-8");

    $consulta = "SELECT * FROM pruebas WHERE nombre = '$busqueda'";
    $resultados = mysqli_query($conexion, $consulta);

   

    while ($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){

        echo "<table width='50%' align='center' border='1px'><tr><td>";
       
        echo $fila['sexo'] . "</td><td>";
        echo $fila['nombre'] . " </td><td>";
        echo $fila['apellido'] . " </td><td>";
        echo $fila['edad'] . "</td></tr></table> " . "<br>";
       
        

    }
    
    mysqli_close($conexion);
    
    
?>
    
</body>
</html>