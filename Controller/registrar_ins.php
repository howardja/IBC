<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$grado_nombre = $_POST['grado_nombre'];
$descripcion_grado=$_POST['descripcion_grado'];


$busqueda= mysql_query("SELECT * FROM gradoInstruccion WHERE nombre='$grado_nombre'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "El Grado de Instruccion ya esta registrado. Por favor intente con otro.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO gradoInstruccion(`nombre`, `descripcion`) VALUES('$grado_nombre','$descripcion_grado')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: ../variables.html?id=entrar');
}
?>