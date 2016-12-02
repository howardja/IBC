<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$habilidad_nombre = $_POST['habilidad_nombre'];
$descripcion_habilidad=$_POST['descripcion_habilidad'];


$busqueda= mysql_query("SELECT * FROM Habilidad WHERE nombre='$habilidad_nombre'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "El Servicio ya esta registrado. Por favor intente con otro.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO Habilidad(`nombre`, `descripcion`) VALUES('$habilidad_nombre','$descripcion_habilidad')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: ../variables.html?id=entrar');
}
?>