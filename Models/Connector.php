<?php
class Connector
{
    private $conexion;
    function __construct(){
        try {
            //$dbRoute = ;
            $this->conexion = new PDO('mysql:host=localhost:3306;dbname=peliculas', "root", "");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           // $this->conexion->exec("SET CHARACTER SET UTF8");
            echo "SE PREPAROOOOO";
            var_dump($this);
            return $this-> conexion;
        } catch (Exception $e) {
            die($e->getMessage());
            echo "Linea del error" . $e->getLine();
        }
        
    }
}
?>