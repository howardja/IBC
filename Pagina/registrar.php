<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$clave1 = $_POST['pass1'];
$clave2 = $_POST['pass2'];

$busqueda= mysql_query("SELECT * FROM usuario WHERE nombre='$nombre'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "El nombre de usuario no se encuentra disponible. Por favor intente con otro.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO usuario(correo,nombre,clave)VALUES('$correo','$nombre','$clave2')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: index.html?id=entrar');
}
?>