<?php
require_once "../Models/Connector.php";

$conexion = new Connector;
$res_consulta = [];
if(isset($_POST["consultas"])){
    switch ($_POST["consultas"]) {
        case "peliculas":
            require_once("../Models/peliculas.php");
            $res_consulta = peliculas_dramaticas($conexion);
            require_once ("../Views/peliculas.php");
            break;
        case "actrices":
            require_once("../Models/actor.php");
            $res_consulta = nombre_actrices($conexion);
            require_once ("../Views/actrices.php");
            break;
        case "actoresNacionalidades":
            require_once("../Models/selector_nacionalidades.php");
            $nacionalidades = select_nacionalidades($conexion);
            //var_dump($nacionalidades);
            require_once("../Views/num_nacionalidades.php");
            break;
        
    }
}

if(isset($_POST["enviarBuscarNacionalidad"])){
    require_once("../Models/actor.php");
    $nacionalidadElegida = $_POST["actoresNacionalidad"];
    $numeroActores = count_actores($conexion,$nacionalidadElegida )[0];
    require_once("../Views/actores_nacionalidades.php");


}

?>