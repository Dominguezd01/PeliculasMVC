<!DOCTYPE html>
<html lang="es">
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
    <h1>NÚMERO DE NACIONALIDADES</h1>
    <div>
    <form action="../Controller/Control.php" method="POST">
        <select name="actoresNacionalidad" id="">
            <?php 
                for($i = 0; $i<3; $i++){
                    echo "<option value='$nacionalidades[$i]'>$nacionalidades[$i]</option>";
                }
            ?>
        </select>
        <input type="submit" name="enviarBuscarNacionalidad">
        </form>
    </div>
</body>
</html>