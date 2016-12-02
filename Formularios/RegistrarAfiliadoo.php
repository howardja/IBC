<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','mysql','mydb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM Persona WHERE nombre1 = 'mono'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Secondname</th>
<th>Lastname</th>
<th>Lastname</th>
<th>Sexo</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['nombre1'] . "</td>";
    echo "<td>" . $row['nombre2'] . "</td>";
    echo "<td>" . $row['apellidoPaterno'] . "</td>";
    echo "<td>" . $row['apellidoMaterno'] . "</td>";
    echo "<td>" . $row['sexo'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>