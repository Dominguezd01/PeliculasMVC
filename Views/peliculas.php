<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

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