<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
require ("ConexionBBDD.php");

    $conexion = mysqli_connect ($db_direccion, $db_user, $db_pass);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar conla Base de Datos";
        exit();
    }
    mysqli_select_db($conexion, $db_name) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion, "utf-8");

    $consulta = "SELECT * FROM HOJA1 WHERE VENDEDOR='Joaquín' ";
    $resultados = mysqli_query($conexion, $consulta);

   

    while ($fila=mysqli_fetch_row($resultados)){

        echo "<table width='50%' align='center' border='1px'><tr><td>";
       
        echo $fila[0] . "</td><td>";
        echo $fila[1] . " </td><td>";
        echo $fila[2] . "</td><td> ";
        echo $fila[3] . "</td><td> ";
        echo $fila[4] . " </td><td>";
        echo $fila[5] . " </td><td>";
        echo $fila[6] . "</td><td> ";
        echo $fila[7] . "</td><td> ";
        echo $fila[8] . "</td></tr></table> " . "<br>";
       
        

    }
    
    mysqli_close($conexion);
    
    
?>
</body>
</html>