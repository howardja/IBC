<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$profesion_nombre = $_POST['profesion_nombre'];
$descripcion_profesion=$_POST['descripcion_profesion'];


$busqueda= mysql_query("SELECT * FROM Profesion WHERE nombre='$profesion_nombre'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "El tipo de Rehabilitacion ya esta registrado. Por favor intente con otro.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO Profesion(`nombre`, `descripcion`) VALUES('$profesion_nombre','$descripcion_profesion')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: ../variables.html?id=entrar');
}
?>