<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Titulo de la pagina</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="" />
        <style>
        /*Estilos generales*/
            html, body {
                height: 100%;
                width: 100%;
            }
            body {
                font-family: 'calibri';
                color: #262626;
                background: #f2f2f2; 
                font-size: 1em;
                line-height: 1.5em;
                height: 100%;
                margin: 0;
                padding: 0;
            }    
            *{box-sizing: border-box;}   
            /*--//--Estilos generales*/
            /*media*/
            /* mobile phones: */
            [class*="col-"] {
                width: 100%;
                float: left;
            }
            @media only screen and (min-width: 600px) {
                /* tablets: */
                .col-m-1 {width: 8.33%;}
                .col-m-2 {width: 16.66%;}
                .col-m-3 {width: 25%;}
                .col-m-4 {width: 33.33%;}
                .col-m-5 {width: 41.66%;}
                .col-m-6 {width: 50%;}
                .col-m-7 {width: 58.33%;}
                .col-m-8 {width: 66.66%;}
                .col-m-9 {width: 75%;}
                .col-m-10 {width: 83.33%;}
                .col-m-11 {width: 91.66%;}
                .col-m-12 {width: 100%;}
            }
            @media only screen and (min-width: 768px) {
                /* desktop: */
                .col-1 {width: 8.33%;}
                .col-2 {width: 16.66%;}
                .col-3 {width: 25%;}
                .col-4 {width: 33.33%;}
                .col-5 {width: 41.66%;}
                .col-6 {width: 50%;}
                .col-7 {width: 58.33%;}
                .col-8 {width: 66.66%;}
                .col-9 {width: 75%;}
                .col-10 {width: 83.33%;}
                .col-11 {width: 91.66%;}
                .col-12 {width: 100%;}
            }
            /*--//--medias*/
        </style>
    </head>
    <body>
        <form action="index.php" method="post">
            <p>Escribir el titulo de la pagina</p>
            <textarea></textarea>
            <button type="submit"></button>
        </form>
    </body>
</html>