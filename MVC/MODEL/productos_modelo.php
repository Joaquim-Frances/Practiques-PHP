<?php

    class productosModel{

        private $db;
        private $productos;

        public function construct(){

            requiere_once ("conectar.php");
            $this->db = Conectar::conexion();
            $this->productos = array();

        }

        public function getProductos(){
            $consulta=$this->db->query("SELECT * FROM productos");
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->$productos[]=$fila;
            }

            return $this->productos;

        }
    }




?>