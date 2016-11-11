<!DOCTYPE html>
<html>
<head>



</head>
<body>

<?php
$con = mysqli_connect('localhost','root','mysql','mydb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

echo "<script >";
echo "alert('".$nom1." ".$nom2."');"; 
echo "</script>";

mysqli_select_db($con,"ajax_demo");
$sql="UPDATE IGNORE  NoVidente SET nombre1='".$_GET['nombre1']."', nombre2='".$_GET['nombre2']."', apellidoPaterno='".$_GET['apellidoPaterno']."', apellidoMaterno='".$_GET['apellidoMaterno']."', sexo='".$_GET['sexo']."', fechaNacimiento='".$_GET['fechaNacimiento']."', estadoCivil='".$_GET['estadoCivil']."', ci=".$_GET['ci'].", fechaRegistro='".$_GET['fechaRegistro']."', sigma=".$_GET['sigma'].", nacionalidad='".$_GET['nacionalidad']."', idiomaMaterno='".$_GET['idiomaMaterno']."', Provincia_id=".$_GET['provinciaNacimiento'];
 mysqli_query($con,$sql);

echo $sql;
mysqli_close($con);

?>
</body>
</html>