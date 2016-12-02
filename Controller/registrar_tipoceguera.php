<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$ceguera_nombre = $_POST['ceguera_nombre'];
$descripcion_ceguera=$_POST['descripcion_ceguera'];
$alias_nombre = $_POST['alias_nombre'];


$busqueda= mysql_query("SELECT * FROM TipoCeguera WHERE nombre='$ceguera_nombre'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "El tipo de Ceguera ya esta registrado. Por favor intente con otro.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO TipoCeguera(`nombre`, `descripcion`, `alias`) VALUES('$ceguera_nombre','$descripcion_ceguera','$alias_nombre')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: ../variables.html?id=entrar');
}
?>