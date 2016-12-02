<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$tipore_nombre = $_POST['tipore_nombre'];
$descripcion_tipore=$_POST['descripcion_tipore'];


$busqueda= mysql_query("SELECT * FROM TipoRehabilitacion WHERE nombre='$tipore_nombre'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "El tipo de Rehabilitacion ya esta registrado. Por favor intente con otro.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO TipoRehabilitacion(`nombre`, `descripcion`) VALUES('$tipore_nombre','$descripcion_tipore')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: ../variables.html?id=entrar');
}
?>