<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        //CREAMOS EL ARCHIVO DE TEXTO
        /*
        Parametros de la funcion fopen("nombre_doc.txt","parametro");
        -"a" crea y sobreescribe
        -"w" crea y remplaza
        -"r" solo lectura
        */
        $sentencia=fopen("datos.txt","a") or die("Problemas en la creacion");
        
        //La funcion fputs() se usa cuando el parametro es "a" o "w" ya que esta en de insercion
        /*
        fputs(llama a la funcion fopen,dato a registrar)
        */
        fputs($sentencia,$_REQUEST['nombre']);
        fputs($sentencia,"\r\n");
        fputs($sentencia,$_REQUEST['comentarios']);
        fputs($sentencia,"\r\n");
        fputs($sentencia,"--------------------------");
        fputs($sentencia,"\r\n");
        
        //cerramos la funcion fopen() para evitar gastos de recursos
        fclose($sentencia);
        echo "Los datos se cargaron correctamente.";
        ?>

    </body>
</html>