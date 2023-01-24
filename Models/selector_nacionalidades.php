<?php
    function select_nacionalidades($conexion){
        $results = $conexion->query("select distinct nacionalidad from actor");
        return $results->fetchAll(PDO::FETCH_COLUMN);
    }
?>