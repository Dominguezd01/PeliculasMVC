<?php
require_once "../Models/Connector.php";
require_once "../Models/peliculas.php";

$conexion = new Connector;

var_dump($conexion);
var_dump(peliculas_dramaticas($conexion));
?>