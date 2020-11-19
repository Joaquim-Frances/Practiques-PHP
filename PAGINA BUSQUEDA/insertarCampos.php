<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];
    



    require ("../ConexionBBDD.php");

    $conexion = mysqli_connect ($db_direccion, $db_user, $db_pass);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar conla Base de Datos";
        exit();
    }
    mysqli_select_db($conexion, $db_name) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion, "utf-8");

    $insert = "INSERT INTO `pruebas`(`nombre`, `apellido`, `sexo`, `edad`) VALUES ('{$nombre}','{$apellido}','{$sexo}',{$edad})";
    
    if (mysqli_query($conexion, $insert)) {

        echo "Campos insertados con exito en la Base de Datos!
        <a href='formsCampos.php'><button name='volver'><---- Volver</button></a>
        ";
        
    }else {

        echo "Error al escribir";
    }

    mysqli_close($conexion);


?>
    
</body>
</html>


