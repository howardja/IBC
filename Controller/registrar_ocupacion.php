<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$ocupacion_nombre = $_POST['ocupacion_nombre'];
$descripcion_ocupacion=$_POST['descripcion_ocupacion'];


$busqueda= mysql_query("SELECT * FROM Ocupacion WHERE nombre='$ocupacion_nombre'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "La Ocupacion ya esta registrada. Por favor intente con otro.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO Ocupacion(`nombre`, `descripcion`) VALUES('$ocupacion_nombre','$descripcion_ocupacion')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: ../variables.html?id=entrar');
}
?>