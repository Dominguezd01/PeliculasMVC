
<?php
    function peliculas_dramaticas($conexion){
        $results = $conexion->query("Select titulo from peliculas");
        return $results->fetchAll(0);
    }
?>