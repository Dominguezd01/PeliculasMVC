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
    <div>
        <form action="../Controller/Control.php" method="POST">
            <select name="consultas" id="consultas">
                <option value="peliculas">Peliculas dramáticas</option>
                <option value="actrices">Nombre de actrices</option>
                <option value="actores_nacionalidades">Actores de una determinada nacionalidad</option>
                <option value="peliculas_actor">Peliculas en las que iterviene un actor</option>
            </select>
            <input type="submit" name="enviar">
        </form>
    </div>
</body>

</html>


