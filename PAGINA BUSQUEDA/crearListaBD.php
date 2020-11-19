<?php
require("../ConexionBBDD.php");


function crearLista(){
    
    $db_direccion = "localhost";
    $db_name = "pruebas";
    $db_user = "root";
    $db_pass = "";

    $conexion = mysqli_connect($db_direccion, $db_user, $db_pass);
    mysqli_select_db($conexion, $db_name) or die ("No se encuentra la base de datos");
    if($conexion){
        

    }else{
        echo "<br><br>No se ha conectado con la base de datos...";
    }
    if ($result = mysqli_query($conexion, "SELECT * FROM pruebas")) {
        
       $datos = mysqli_fetch_all($result);
       foreach ($datos as $element) {
           echo "<table align='center'><tr><td>$element[0]</td><td>$element[1]</td><td>$element[2]</td><td>$element[3]</td><td>$element[4]</td><td><a href='?action=delete&id={$element[0]}'>
           <button class= 'btn btn-danger'>Delete</button></a></td></tr><br>";
       }
        echo "</table>";
        mysqli_free_result($result);
      }
      
      mysqli_close($conexion);

}


?>