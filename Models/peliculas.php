
<?php
    function peliculas_dramaticas($conexion){
        
        var_dump($conexion);

        $results = $conexion->query("Select titulo from peliculas");

        var_dump($results->fetchAll(0));

    }

?>