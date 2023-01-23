<?php
class Connector extends PDO
{
    private $conexion;
    function __construct(){
        try {
            //$dbRoute = ;
            parent::__construct('mysql:dbname=peliculas;host=127.0.0.1;port=3306', "root", "");
            /*
            var_dump($this->conexion);
            $this->conexion->set(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion->exec("SET CHARACTER SET UTF8");
            */
        } catch (Exception $e) {
            die($e->getMessage());
            echo "Linea del error" . $e->getLine();
        }
        
    }
}


?>