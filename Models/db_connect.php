<?php
class connector
{
    private $conexion;
    public function __construct()
    {

        try {
            $dbRoute = "mysql:host=127.0.0.1:3306;dbname=peliculas";
            $this->conexion = new PDO($dbRoute, "root", "");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion->exec("SET CHARACTER SET UTF8");
        } catch (Exception $e) {
            die($e->getMessage());
            echo "Linea del error" . $e->getLine();
        }

    }
}
?>