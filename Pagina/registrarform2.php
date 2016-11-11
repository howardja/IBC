<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$ci_miembro = $_POST['ci_miembro'];
$diagnostico = $_POST['diagnostico'];
$diag_etiologico = $_POST['diag_etiologico'];
$od = $_POST['od'];
$oi = $_POST['oi'];
$ao = $_POST['ao'];
$od1 = $_POST['od1'];
$oi1 = $_POST['oi1'];
$ao1 = $_POST['ao1'];

$ceguera_irreversible = $_POST['ceguera_irreversible'];
$tipo_ceguera=$_POST['tipo_ceguera'];



$busqueda= mysql_query("SELECT * FROM form2 WHERE ci_miembro='$ci_miembro'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "El CI ya esta registrado. Por favor intente con otro.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO form2(ci_miembro,diagnostico,diag_etiologico,od,oi,ao,od1,oi1,ao1,ceguera_irreversible,tipo_ceguera)VALUES('$ci_miembro','$diagnostico','$diag_etiologico','$od','$oi','$ao','$od1','$oi1','$ao1','$ceguera_irreversible','$tipo_ceguera')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: menuregistro.html?id=entrar');
}
?>