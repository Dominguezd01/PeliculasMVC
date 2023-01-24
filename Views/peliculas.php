<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      :root{
        color-scheme: dark;
    }
    body{
        display: grid;
        place-items: center;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        
    }
</style>
<body>
    <h1>PELICULAS DRAMATICAS</h1>
    <div>
        <?php
            //require_once("../Controller/Control.php");

            foreach($res_consulta as $resultados){
                echo "
                    <div>
                       Nombre: $resultados[titulo];
                    </div>
                ";
            }


        ?>
    </div>
</body>

</html>