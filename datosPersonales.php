<?php
date_default_timezone_set('America/La_Paz');
echo $_GET['id'];

$con = mysqli_connect('localhost','root','mysql','mydb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT id, nombre1, nombre2, apellidoPaterno, apellidoMaterno, ci, sigma, fechaRegistro, sexo, estadoCivil, nacionalidad, idiomaMaterno, fechaNacimiento FROM NoVidente WHERE id=".$_GET['id'];
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);

echo "<table>";
echo "<tr><td class='dere'>
		  Nombres:</td><td class='iz'> <input type='text'  name='nombre1' id='nombre1' value='".$row['nombre1']."'>
		</td></tr>
		<tr><TD></TD>
			<td>
				<input type='text' id='nombre2' value='".$row['nombre2']."'>
			</td>
		</tr>
		<tr><td class='dere'>  Apellido Paterno:</td><td class='iz'> <input type='text' class='textbox' id='apellidoPaterno' value='".$row['apellidoPaterno']."'><br>
		</td></tr>
		<tr><td class='dere'>  Apellido Materno:</td><td class='iz'> <input type='text' class='textbox' id='apellidoMaterno' value='".$row['apellidoMaterno']."'><br>
		</td></tr>
		<tr><td class='dere'>  Fecha de registro IBC:</td><td class='iz'> <input type='DATE' class='textbox' id='fechaRegistro' value='".date('Y-m-d',strtotime($row["fechaRegistro"]))."'><br>
		</td></tr>
		<tr><td class='dere'>  Codigo de registro(sigma):</td><td class='iz'> <input type='text' class='textbox' id='sigma' value='".$row['sigma']."'><br>
		</td></tr>
		<tr><td class='dere'>  C.I.:</td><td class='iz'> <input type='text' class='textbox' id='ci' value='".$row['ci']."'><br>
		</td></tr>
		<tr><td class='dere'>  Sexo:</td>
			<td class='iz'> 
			<select id='sexo'>
			  <option value=''></option>
			  <option value='M' ". ($row['sexo']=='M' ? 'selected': '').">Masculino</option>
			  <option value='F' ". ($row['sexo']=='F' ? 'selected': '').">Femenino</option>
			</select>
		</td></tr>
		<tr><td class='dere'>  Estado Civil:</td><td class='iz'> 
			<select id='estadoCivil'>
			  <option value=''></option>
			  <option value='Soltero' ". ($row['estadoCivil']=='Soltero' ? 'selected': '').">Soltero</option>
			  <option value='Casado' ". ($row['estadoCivil']=='Casado' ? 'selected': '').">Casado</option>
			  <option value='Divorciado' ". ($row['estadoCivil']=='Divorciado' ? 'selected': '').">Divorciado</option>
			  <option value='Viudo' ". ($row['estadoCivil']=='Viudo' ? 'selected': '').">Viudo</option>
			</select><br>
		</td></tr>
		<tr><td class='dere'>  Nacionalidad:</td><td class='iz'> <input type='text' class='textbox' id='nacionalidad'value='".$row['nacionalidad']."'><br>
		</td></tr>
		<tr><td class='dere'>  Idioma Materno:</td><td class='iz'> <input type='text' class='textbox' id='idiomaMaterno' value='".$row['idiomaMaterno']."'><br>
		</td></tr>
		<tr><td class='dere'>  Lugar de Nacimiento:</td><td class='iz'> <select id='lugarNacimiento' onclick='desplegarLugar(this.value)' onchange='desplegarProvincia(this.value)'></select><br>
		<select id='provinciaNacimiento' style=' display: none; '></select>
		</td></tr>
		<tr><td class='dere'>  Fecha de Nacimiento:</td><td class='iz'> <input type='date'  id='fechaNacimiento' value='".date('Y-m-d',strtotime($row["fechaNacimiento"]))."'><br>
		</td></tr>
	</table>
	<p onclick='inssertarDatosPersonales(this.value)'> guardar </p>";


echo "<table>";
echo "<tr><td class='dere'>
		  Nombres:</td><td class='iz'> <input type='text'  name='nombre1' id='nombre1'>
		</td></tr>
		<tr><TD></TD>
			<td>
				<input type='text' id='nombre2'>
			</td>
		</tr>
		<tr><td class='dere'>  Apellido Paterno:</td><td class='iz'> <input type='text' class='textbox' id='apellidoPaterno'><br>
		</td></tr>
		<tr><td class='dere'>  Apellido Materno:</td><td class='iz'> <input type='text' class='textbox' id='apellidoMaterno'><br>
		</td></tr>
		<tr><td class='dere'>  Fecha de registro IBC:</td><td class='iz'> <input type='DATE' class='textbox' id='fechaRegisttro'><br>
		</td></tr>
		<tr><td class='dere'>  Codigo de registro(sigma):</td><td class='iz'> <input type='text' class='textbox' id='sigma'><br>
		</td></tr>
		<tr><td class='dere'>  C.I.:</td><td class='iz'> <input type='text' class='textbox' id='ci'><br>
		</td></tr>
		<tr><td class='dere'>  Sexo:</td>
			<td class='iz'> 
			<select id='sexo'>
			  <option value=''></option>
			  <option value='M'>Masculino</option>
			  <option value='F'>Femenino</option>
			</select>
		</td></tr>
		<tr><td class='dere'>  Estado Civil:</td><td class='iz'> 
			<select id='estadoCivil'>
			  <option value=''></option>
			  <option value='Soltero'>Soltero</option>
			  <option value='Casado'>Casado</option>
			  <option value='Divorciado'>Divorciado</option>
			  <option value='Viudo'>Viudo</option>
			</select><br>
		</td></tr>
		<tr><td class='dere'>  Nacionalidad:</td><td class='iz'> <input type='text' class='textbox' id='nacionalidad'><br>
		</td></tr>
		<tr><td class='dere'>  Idioma Materno:</td><td class='iz'> <input type='text' class='textbox' id='idiomaMaterno'><br>
		</td></tr>
		<tr><td class='dere'>  Lugar de Nacimiento:</td><td class='iz'> <select id='lugarNacimiento' onclick='desplegarLugar(this.value)' onchange='desplegarProvincia(this.value)'></select><br>
		<select id='provinciaNacimiento' style=' display: none; '></select>
		</td></tr>
		<tr><td class='dere'>  Fecha de Nacimiento:</td><td class='iz'> <input type='date'  id='fechaNacimiento'><br>
		</td></tr>
	</table>
	<p onclick='inssertarDatosPersonales(this.value)'> guardar </p>";

?>