<?php

$host_name = "localhost";
$user_server = "root";
$pass_server = "";
$name_bd = "bd_prueba";

$conexion = mysqli_connect($host_name, $user_server, $pass_server, $name_bd) or die ("Hay problemas con la conexion");

if(!$conexion){/*die("Hay problemas con la conexion")*/;}else{echo "Conectado";}



