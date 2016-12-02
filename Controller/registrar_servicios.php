<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$servicio_nombre = $_POST['servicio_nombre'];
$descripcion_servicio=$_POST['descripcion_servicio'];


$busqueda= mysql_query("SELECT * FROM Servicios WHERE nombre='$servicio_nombre'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "El Servicio ya esta registrado. Por favor intente con otro.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO Servicios(`nombre`, `descripcion`) VALUES('$servicio_nombre','$descripcion_servicio')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: ../variables.html?id=entrar');
}
?>