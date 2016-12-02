<?php
session_start();
require_once('conexion.php');
// recuperamos los datos del formulario
$ci = $_POST['ci'];
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1=$_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$sexo_nv=$_POST['sexo_nv'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$sigma=$_POST['sigma'];
$fecha_registro=$_POST['fecha_registro'];
$estado_civil=$_POST['estado_civil'];
$nacionalidad=$_POST['nacionalidad'];
$idioma_materno=$_POST['idioma_materno'];
$telefono=$_POST['telefono'];
$celular=$_POST['celular'];
$telefono_referencia=$_POST['telefono_referencia'];
$correo = $_POST['correo'];


$busqueda= mysql_query("SELECT * FROM NoVidente WHERE ci='$ci'"); // inicio de mi consulta para evitar duplicado
    if(mysql_num_rows($busqueda)>0) { 
      echo "El usuario ya esta registrado. Por favor verifique sus datos.<br>"; 
      echo "<a href=\"javascript:history.back()\">Regresar</a>"; 
    } 
else{
$consulta = "INSERT INTO NoVidente(`ci`,`nombre1`,`nombre2`, `apellidoPaterno`, `apellidoMaterno`,`sexo`,`fechaNacimiento`, `sigma`, `fechaRegistro`, `estadoCivil`,`nacionalidad`,`idiomaMaterno`,`telefono`,`celular`,`telefonoReferencia`,`email`) VALUES('$ci','$nombre1','$nombre2','$apellido1','$apellido2','$sexo_nv','$fecha_nacimiento','$sigma','$fecha_registro','$estado_civil','$nacionalidad','$idioma_materno','$telefono','$celular','$telefono_referencia','$correo')";
$query = mysql_query($consulta,$conexion) or die (mysql_error());
header('Location: ../menu.html?id=entrar');
}
?>