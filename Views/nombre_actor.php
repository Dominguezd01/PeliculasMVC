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
    <form action="../Controller/Control.php" method="POST">
        <label for="nombre_actor">Teclee el nombre del actor:</label>
        <input type="text"name="nombre_actor" id="nombre_actor">
        <input type="submit" name="enviar_nombre_actor" value="continuar">
    </form>
</body>
</html>