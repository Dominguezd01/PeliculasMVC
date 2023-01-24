<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Space+Mono:wght@700&display=swap');
    :root{
        color-scheme: dark;
    }
    body{
        display: grid;
        place-items: center;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }
    h1{
        text-transform: uppercase;
    }
</style>
<body>
    <?php 
        echo "<h1>PELICULAS EN LAS QUE INTERVIENE $actor_nombre<br></h1>";
        if(!empty($peliculas)){
            foreach($peliculas as $pelicula){
                echo "<p>$pelicula</p>";
            }
        }else{
            echo "ESTE ACTOR NO TIENE PELICULAS ASOCIADAS O NO EXISTE";
        }
    ?>
</body>
</html>