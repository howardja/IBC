<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$fecha_registro = $_POST['fecha_registro'];
$codigo_sigma= $_POST['codigo_sigma'];
$ci_miembro= $_POST['ci_miembro'];
$tipo_ceguera= $_POST['tipo_ceguera'];
$causas_ceguera= $_POST['causas_ceguera'];
$fecha_inicio_ceguera = $_POST['fecha_inicio_ceguera'];
$diagnostico = $_POST['diagnostico'];
$hospital = $_POST['hospital'];
$dis_adicional= $_POST['dis_adicional'];
$especificacion= $_POST['especificacion'];
$seguro= $_POST['seguro'];
$nombre_seguro= $_POST['nombre_seguro'];


$busqueda= mysql_query("SELECT * FROM form3 WHERE ci_miembro='$ci_miembro'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "El CI ya esta registrado. Por favor intente con otro.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO form3(nombre1,nombre2,apellido1,apellido2,fecha_registro,codigo_sigma,ci_miembro,tipo_ceguera,causas_ceguera,fecha_inicio_ceguera,diagnostico,hospital,dis_adicional,especificacion,seguro,nombre_seguro)VALUES('$nombre1','$nombre2','$apellido1','$apellido2','$fecha_registro','$codigo_sigma','$ci_miembro','$tipo_ceguera','$causas_ceguera','$fecha_inicio_ceguera','$diagnostico','$hospital','$dis_adicional','$especificacion','$seguro','$nombre_seguro')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: menuregistro.html?id=entrar');
}
?>