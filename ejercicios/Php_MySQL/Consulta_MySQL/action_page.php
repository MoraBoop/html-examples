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

//variables de membresia para entablar conexion
$host_name = "localhost";
$user_bd = "root";
$pass_bd = "";
$base_de_datos = "bd_prueba";
    
//abrimps una conexion con el servidor
$conexion = mysqli_connect($host_name, $user_bd, $pass_bd, $base_de_datos);
/*if(!$conexion){echo "<br />"; echo "sin conexion";}else{echo "<br />"; echo "conectado";}*/

$nombre = $_REQUEST['txtNombre'];

//consultamos a la base de datos
$consultar = "SELECT * FROM datos WHERE nombre = '$nombre'";
$resultado = mysqli_query($conexion,$consultar);
    
//capturar la fila
$registro = mysqli_fetch_array($resultado);/*Registros de la fila*/

//Registros de la fila
echo $registro['id']. "<br/>";
echo $registro['nombre']. "<br/>";
echo $registro['apellido']. "<br/>";
echo $registro['dni']. "<br/>";   
    
//cerramos la conexion
mysqli_close($conexion);
?>


</body>
</html>

