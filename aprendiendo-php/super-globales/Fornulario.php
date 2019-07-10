<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Fornulario</title>
    </head>
    <body>
        <h1>Fornulario en PHP</h1>
        
        <!--por GET o POST -->
        <form method="POST" action="recibir.php">
            <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            </p>
            
            <p>
            <label for="nombre">Apellidos</label>
            <input type="text" name="apellidos">
            </p>
            
            <p>
                <input type="submit" value="Enviar datos">
            </p>
        </form>

    </body>
</html>
<?php

?>

