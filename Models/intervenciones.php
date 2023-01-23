<?
    function  peliculas_interviene_actor($conexion, $actor){
        $results = $conexion->query("Select titulo from intervenciones where id_actor = (Select id_actor From actor where nombre_apellidos = $actor);");
        return $results ->fetchAll(0);
    }
?>