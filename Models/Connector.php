<?php
class Connector
{
    private $conexion;
    function __construct(){
        try {
            //$dbRoute = ;
            $this->conexion = new PDO('mysql:dbname=peliculas;host=127.0.0.1:3306', "root", "");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion->exec("SET CHARACTER SET UTF8");
            
        } catch (Exception $e) {
            die($e->getMessage());
            echo "Linea del error" . $e->getLine();
        }
        
    }
}
?>