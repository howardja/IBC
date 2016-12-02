<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','mysql','mydb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT id, nombre1, nombre2, apellidoPaterno, apellidoMaterno, ci, sigma FROM NoVidente ";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th style=' display: none; '>id</th>
<th>Nombre </th>
<th>Apellido Paterno</th>
<th>Apellido Materno</th>
<th>ci</th>
<th>Sigma</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr onclick=\"window.location.href='./registrar.php?id=". $row['id'] ."';\">";
    echo "<td style='display: none;'>". $row['id'] ."</td>";
    echo "<td>" . $row['nombre1'] ." ".$row['nombre2']. "</td>";
    echo "<td>" . $row['apellidoPaterno'] . "</td>";
    echo "<td>" . $row['apellidoMaterno'] . "</td>";
    echo "<td>" . $row['ci'] . "</td>";
    echo "<td>" . $row['sigma'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>