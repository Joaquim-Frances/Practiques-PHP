<?php

    requiere_once ("../model/productos_mmodelo.php");
    $producto = new productosModel();

    $matrizProductos = $producto->getProductos();



    requiere_once ("../model/productos_view.php");



?>