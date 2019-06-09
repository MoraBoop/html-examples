<?php
//variables
$usuario=$_REQUEST['txtUser'];
$contra=$_REQUEST['txtPass'];

echo $usuario;
echo "<br />";
echo $contra;
/*capturan el valor de las que son enviadas desde el html*/

//conectar a base de datos
$conexion = mysqli_connect("localhost", "root", "", "bd_prueba");
if(!$conexion){echo "<br />"; echo "sin conexion";}else{echo "<br />"; echo "conectado";}


