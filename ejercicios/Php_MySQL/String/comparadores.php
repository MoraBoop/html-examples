<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Titulo de la pagina</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="" />
    </head>
    <body>
        <!--Etiquetas--><!--/Etiquetas-->        
        <?php 
            $variable1 = "casa";
            $variable2 = "CASA";
        
            $resultado1 = strcmp($variable1,$variable2);
            $resultado2 = strcasecmp($variable1,$variable2);
        
            echo "El resultado es " . $resultado1;
            echo "<br />";
            echo "El resultado es " . $resultado2;
        ?>
    </body>
</html>