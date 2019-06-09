<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Titulo de la pagina</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="" />
        
        <style>
            .resaltar {
                color: red;
                font-weight: bold;
                font-size: 32px; 
            }
        </style>
    </head>
    <body>
        <!--Etiquetas--><!--/Etiquetas-->
        <?php 
            echo "<p class='resaltar'>Hola soy un script</p>";
            echo '<p class="resaltar">Hola soy un script</p>';
            echo '<p class=\'resaltar\'>Hola soy un script</p>';
        ?>
    </body>
</html>