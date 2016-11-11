<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$ci_miembro = $_POST['ci_miembro'];
$form1 = $_POST['form1'];
$form2 = $_POST['form2'];
$form3 = $_POST['form3'];
$form4 = $_POST['form4'];
$run=$_POST['run'];
$cert_nacimiento=$_POST['cert_nacimiento'];
$cert_medico=$_POST['cert_medico'];
$cert_residencia=$_POST['cert_residencia'];
$ubicacion = $_POST['ubicacion'];
$fotografias = $_POST['fotografias'];
$deposito_ban = $_POST['deposito_ban'];
$grupo_sanguineo=$_POST['grupo_sanguineo'];



$busqueda= mysql_query("SELECT * FROM form1 WHERE ci_miembro='$ci_miembro'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "El CI ya esta registrado. Por favor intente con otro.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO form1(ci_miembro,form_1,form_2,form_3,form_4,run,cert_nacimiento,cert_medico,cert_residencia,ubicacion,fotografias,deposito_ban,grupo_sanguineo)VALUES('$ci_miembro','$form1','$form2','$form3','$form4','$run','$cert_nacimiento','$cert_medico','$cert_residencia','$ubicacion','$fotografias','$deposito_ban','$grupo_sanguineo')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: menuregistro.html?id=entrar');
}
?>