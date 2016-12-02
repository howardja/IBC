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
$sql="INSERT INTO NoVidente (nombre1, nombre2, apellidoMaterno, apellidoPaterno, sexo, fechaNacimiento, estadoCivil, ci, fechaRegistro, sigma, nacionalidad, idiomaMaterno, Provincia_id) VALUES ('".$_GET['nombre1']."', '".$_GET['nombre2']."', '".$_GET['apellidoPaterno']."', '".$_GET['apellidoMaterno']."', '".$_GET['sexo']."', '".$_GET['fechaNacimiento']."', '".$_GET['estadoCivil']."', ".$_GET['ci'].", '".$_GET['fechaRegistro']."', ".$_GET['sigma'].", '".$_GET['nacionalidad']."', '".$_GET['idiomaMaterno']."', ".$_GET['provinciaNacimiento'].")";
 mysqli_query($con,$sql);

echo $sql;
mysqli_close($con);
?>
</body>
</html>