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
        case "actores_nacionalidades":
            require_once("../Models/selector_nacionalidades.php");
            $nacionalidades = select_nacionalidades($conexion);
            require_once("../Views/num_nacionalidades.php");
            break;
        case "peliculas_actor":
            require_once("../Views/nombre_actor.php");
            break;
    }
}

if(isset($_POST["enviarBuscarNacionalidad"])){
    require_once("../Models/actor.php");
    $nacionalidadElegida = $_POST["actoresNacionalidad"];
    $numeroActores = count_actores($conexion,$nacionalidadElegida )[0];
    require_once("../Views/actores_nacionalidades.php");
}
if(isset($_POST["enviar_nombre_actor"])){
    require_once("../Models/intervenciones.php");
    $actor_nombre = $_POST["nombre_actor"];
    $peliculas = peliculas_interviene_actor($conexion,$actor_nombre);
    require_once("../Views/resultados_intervenciones.php");
}

?>