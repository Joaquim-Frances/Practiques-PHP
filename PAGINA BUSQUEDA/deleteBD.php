<?php

function deleteBD($id){
    
        $db_host = "localhost";
        $db_name = "pruebas";
        $db_user = "root";
        $db_pass = "";

        $conexion = mysqli_connect($db_host, $db_user, $db_pass);
        mysqli_select_db($conexion, $db_name) or die ("No se encuentra la base de datos");

    if (mysqli_query($conexion, "DELETE FROM pruebas WHERE id = {$id}")) {
        
        echo "¡¡Entrada eliminada con éxito!!";

    }else {

        echo "No se que has fotut!!";

    }
}

if(isset($_GET['action'])){
    switch ($_GET['action']) {
        
        case 'delete':
            $id = $_GET['id'];
            deleteBD($id);
            break;
        
        default:
            
            break;
    }
    
    
}






?>