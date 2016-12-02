<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','mysql','mydb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM Departamento ";
$result = mysqli_query($con,$sql);

echo "<option value='0'> </option>";
while($row = mysqli_fetch_array($result)) {
    echo "<option value='". $row['id']."'>" . $row['nombre'] . "</option>";
}
mysqli_close($con);
?>