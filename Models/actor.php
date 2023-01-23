<?
    function nombre_actrices($conexion){
        $results = $conexion->query("Select nombre_apellidos from actor where sexo = 'f' ");
        return $results->fetchAll(0);
    }

    function count_actores($conexion, $nacionalidad){
        $results = $conexion->query("Select COUNT(*) FROM actor where nacionalidad='$nacionalidad'");
        return $results -> fetchAll(0);
    }
?>