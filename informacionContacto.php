

<?php
date_default_timezone_set('America/La_Paz');
echo $_GET['id'];

$con2 = mysqli_connect('localhost','root','mysql','mydb');
if (!$con2) {
    die('Could not connect: ' . mysqli_error($con2));
}
mysqli_select_db($con2,"ajax_demo");
$sql2="SELECT * FROM Departamento ";
$result2 = mysqli_query($con2,$sql2);
mysqli_close($con2);

	if (isset($_GET['id']) && $_GET['id']!= ""){

	$con = mysqli_connect('localhost','root','mysql','mydb');
	if (!$con) {
	    die('Could not connect: ' . mysqli_error($con));
	}
	mysqli_select_db($con,"ajax_demo");
	$sql="SELECT id, nombre1, nombre2, apellidoPaterno, apellidoMaterno, ci, sigma, fechaRegistro, sexo, estadoCivil, nacionalidad, idiomaMaterno, fechaNacimiento, Provincia_id FROM NoVidente WHERE id=".$_GET['id'];
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	mysqli_close($con);

	$conProvincia = mysqli_connect('localhost','root','mysql','mydb');
	if (!$conProvincia) {
	    die('Could not connect: ' . mysqli_error($conProvincia));
	}
	mysqli_select_db($conProvincia,"ajax_demo");
	$sqlProvincia="SELECT * FROM Provincia WHERE Departamento_id=1";
	$resultProvincia = mysqli_query($conProvincia,$sqlProvincia);
	mysqli_close($conProvincia);
	
	$conMunicipio = mysqli_connect('localhost','root','mysql','mydb');
	if (!$conMunicipio) {
	    die('Could not connect: ' . mysqli_error($conMunicipio));
	}
	mysqli_select_db($conMunicipio,"ajax_demo");
	$sqlMunicipio="SELECT * FROM Municipio WHERE Provincia_id=".$idProvincia['id'];
	echo $sqlMunicipio;
	$resultMunicipio = mysqli_query($conMunicipio,$sqlMunicipio);
	mysqli_close($conMunicipio);

	


	echo "<table>
					<tr><td class='dere'>  Lugar de Residencia:</td><td class='iz'> ";
	echo "		
			<select id='provinciaResidencia'>";
				while($rowProvincia = mysqli_fetch_array($resultProvincia)) {
	    		echo "<option value='". $rowProvincia['id']."' ". ($rowProvincia['id']==$row['Provincia_id'] ? 'selected': '').">" . $rowProvincia['nombre'] . "</option>";
				}
	echo "</select>";
	echo $sqlMunicipio."		
			<select id='municipioResidencia'>";
			while($rowMunicipio = mysqli_fetch_array($resultMunicipio)) {
	    		echo "<option value='". $rowMunicipio['id']."' ". ($rowMunicipio['id']==$row['Municipio_id'] ? 'selected': '').">" . $rowMunicipio['nombre'] . "</option>";
			}


	echo"			</select><br>	</td></tr>
					<tr><td class='dere'>  Direcccion:</td><td class='iz'> <input type='text' class='textbox' id='direccion'><br>
					</td></tr>
					<tr><td class='dere'>  Telefono:</td><td class='iz'> <input type='text' class='textbox' id='telefono'><br>
					</td></tr>
					<tr><td class='dere'>  Celular:</td><td class='iz'> <input type='text' class='textbox' id='celular'><br>
					</td></tr>
					<tr><td class='dere'>  Telefono de Referencia:</td><td class='iz'> <input type='text' class='telefonoReferencia' id='telefonoReferencia'><br>
					</td></tr>
					<tr><td class='dere'>  Email:</td><td class='iz'> <input type='email' class='textbox' id='email'><br>
					</td></tr>
				</table>
				<p onclick='inssertarInformacionContacto(this.value)'> guardar </p>";
}
else
{
	$conProvincia = mysqli_connect('localhost','root','mysql','mydb');
	if (!$conProvincia) {
	    die('Could not connect: ' . mysqli_error($conProvincia));
	}
	mysqli_select_db($conProvincia,"ajax_demo");
	$sqlProvincia="SELECT * FROM Provincia WHERE Departamento_id=1";
	$resultProvincia = mysqli_query($conProvincia,$sqlProvincia);
	mysqli_close($conProvincia);
	echo "<table>
					<tr><td class='dere'>  Lugar de Residencia:</td><td class='iz'> <input type='text' class='textbox' id='lugarResidencia'><br>
					</td></tr>
					<tr><td class='dere'>  Direcccion:</td><td class='iz'> <input type='text' class='textbox' id='direccion'><br>
					</td></tr>
					<tr><td class='dere'>  Telefono:</td><td class='iz'> <input type='text' class='textbox' id='telefono'><br>
					</td></tr>
					<tr><td class='dere'>  Celular:</td><td class='iz'> <input type='text' class='textbox' id='celular'><br>
					</td></tr>
					<tr><td class='dere'>  Telefono de Referencia:</td><td class='iz'> <input type='text' class='telefonoReferencia' id='telefonoReferencia'><br>
					</td></tr>
					<tr><td class='dere'>  Email:</td><td class='iz'> <input type='email' class='textbox' id='email'><br>
					</td></tr>
				</table>
				<p onclick='inssertarInformacionContacto(this.value)'> guardar </p>";
} 

?>