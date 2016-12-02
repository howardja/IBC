<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$ingresos_nombre = $_POST['ingresos_nombre'];
$descripcion_ingresos=$_POST['descripcion_ingresos'];


$busqueda= mysql_query("SELECT * FROM Ingresos WHERE nombre='$ingresos_nombre'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "El tipo de Ingresos ya esta registrado. Por favor intente con otro.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO Ingresos(`nombre`, `descripcion`) VALUES('$ingresos_nombre','$descripcion_ingresos')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: ../variables.html?id=entrar');
}
?>