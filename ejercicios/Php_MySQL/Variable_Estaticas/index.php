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
        
        function incremento(){
            static $num = 0;
            $num ++;
                
            echo $num . "<br />";
        }
        
        
        //Cuando no usamos la variable de tipo estatica
        /*function incremento(){
            $num = 0;
            $num ++;                
            echo $num . "<br />";
        }*/
            
        incremento();
        incremento();
        incremento();
        incremento();
        ?>
    </body>
</html>