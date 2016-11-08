<?php
session_start();
require_once('conexion.php');
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

$consulta = "SELECT * FROM usuario WHERE nombre='$nombre' and clave='$clave'";
$query = mysql_query($consulta,$conexion);
if($row = mysql_fetch_assoc($query))
{
$_SESSION['nombre'] = $row['nombre'];
$_SESSION['correo'] = $row['correo'];
$_SESSION['id'] = 'conectado'; 

header('Location: menu.html?id=conectado');
}else { 
   echo "Usuario o Password estan incorrectos.";

   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }
 
?>