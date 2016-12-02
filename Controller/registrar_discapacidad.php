<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$discapacidad_nombre = $_POST['discapacidad_nombre'];
$descripcion_discapacidad=$_POST['descripcion_discapacidad'];


$busqueda= mysql_query("SELECT * FROM Discapacidad WHERE nombre='$discapacidad_nombre'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "El tipo de Rehabilitacion ya esta registrado. Por favor intente con otro.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO Discapacidad(`nombre`, `descripcion`) VALUES('$discapacidad_nombre','$descripcion_discapacidad')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: ../variables.html?id=entrar');
}
?>