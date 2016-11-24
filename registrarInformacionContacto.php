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
$sql="UPDATE IGNORE NoVidente SET telefono=".$_GET['telefono'].", celular=".$_GET['celular'].", telefonoReferencia=".$_GET['telefonoReferencia'].", email='".$_GET['email']."' WHERE id = ".$_GET['idAfiliado'];
 mysqli_query($con,$sql);

echo $sql;
mysqli_close($con);
?>
</body>
</html>