<?php
require_once "../Models/Connector.php";

$conexion = new Connector;
$res_consulta = [];
var_dump($_POST);
switch ($_POST["consultas"]) {
    case "peliculas":
        require_once("../Models/peliculas.php");
        $res_consulta = peliculas_dramaticas($conexion);
        require_once "../Views/peliculas.php";
        break;

    case "actrices":
        require_once("../Models/actor.php");
        $res_consulta = nombre_actrices($conexion);
        require_once "../Views/actrices.php";
        break;
    case "actores":
        require_once("../Models/selector_nacionalidades.php");
        $nacionalidades = select_nacionalidades($conexion);
        require_once("../")
}
