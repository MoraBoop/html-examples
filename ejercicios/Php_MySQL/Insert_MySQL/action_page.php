<?php

$nombre = $_REQUEST['txtNombre'];
$apellido = $_REQUEST['txtApellido'];
$dni = $_REQUEST['txtDni'];

//conexion con my sql
$host_name = "localhost";
$user_server = "root";
$pass_server = "";
$name_bd = "bd_prueba";

$conexion = mysqli_connect($host_name, $user_server, $pass_server, $name_bd) or die ("Hay problemas con la conexion");

//sentencia sql
$inserta_Registro = "INSERT INTO datos(nombre,apellido,dni) VALUES($nombre,$apellido,$dni)"

//registramos
mysqli_query($conexion, $inserta_Registro);
echo "Datos registrados";

