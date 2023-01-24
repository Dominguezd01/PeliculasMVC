<?php
class Connector extends PDO
{
    function __construct(){
        try {
            parent::__construct('mysql:dbname=peliculas;host=127.0.0.1;port=3306', "root", "");
        } catch (Exception $e) {
            die($e->getMessage());
            echo "Linea del error" . $e->getLine();
        }
    }
}
?>