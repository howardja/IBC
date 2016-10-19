<link rel="stylesheet" type="text/css" href="estilos.css">
<!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->

<script>
function opendatos(datosName) {
    var i;
    var x = document.getElementsByClassName("datos");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(datosName).style.display = "block";  
}
function toogleRehabilitacion(x)
{
	if (x=="si") {
		document.getElementById("datosRehabilitacion").style.display = "block";  
	}
	else{
		document.getElementById("datosRehabilitacion").style.display = "none";
	}
}
var counter = 1;
var counterp = 1;
var limit = 3;

function addHabilidad(divName){
	var counter = 1;

     if (counter == limit)  {

          alert("maximo permitido " + counter + " ");

     }

     else {

          var newdiv = document.createElement('div');

          newdiv.innerHTML = "<input type='text' name='myInputs[]'>";

          document.getElementById(divName).appendChild(newdiv);

          counter++;

     }

}
function addPariente(tableName){
     if (counterp == limit)  {

          alert("maximo permitido " + counterp + " ");

     }

     else {

            var table = document.getElementById(tableName);
		    var row = table.insertRow(1);
		    var cell1 = row.insertCell(0);
		    var cell2 = row.insertCell(1);
		    var cell3 = row.insertCell(2);
		    var cell4 = row.insertCell(3);
		    var cell5 = row.insertCell(4);
		    var cell6 = row.insertCell(5);
		    var cell7 = row.insertCell(6);
		    var cell8 = row.insertCell(7);
		    var cell9 = row.insertCell(8);
		    cell1.innerHTML = "<input type='text' name='tipoParentesco'>";
		    cell2.innerHTML = "<input type='text' name='nombrePariente'>";
		    cell3.innerHTML = "<input type='text' name=''>";
		    cell4.innerHTML = "<input type='text' name=''>";
		    cell5.innerHTML = "<select><option value=''>ninguna</option><option value='pri'>primaria</option><option value='Femenino'>secundaria</option><option>tecnico</option><option>universitario</option><option>licenciatura</option></select>";
		    cell6.innerHTML = "<input type='text' name=''>";
		    cell7.innerHTML = "<input type='text' name=''>";
		    cell8.innerHTML = "<input type='date' name=''>";
		    cell9.innerHTML = "<input type='text' name=''>";

          counterp++;

     }

}

function inssertar(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","registrarAfiliado.php"+"?nombre1="+document.getElementById("nombre1").value+"&nombre2="+document.getElementById("nombre2").value+"&apellidoPaterno="+document.getElementById("apellidoPaterno").value+"&apellidoMaterno="+document.getElementById("apellidoMaterno").value+"&sexo="+document.getElementById("sexo").value+"&fechaNacimiento="+document.getElementById("fechaNacimiento").value+"&estadoCivil="+document.getElementById("estadoCivil").value+"&ci="+document.getElementById("ci").value,true);
        xmlhttp.send();
    }
}
</script>
<body>
<div class="cuadro">
<div id="txtHint"><b>la informacion personal se mostrara aca...</b></div>
<nav class="registrarMenu">
<div>
	<a href="#" onclick="opendatos('datosPersonales')">datos personales<br></a></div><div>
	<a href="#" onclick="opendatos('informacionContacto')">informacion de Contacto<br></a></div>
	<a href="#" onclick="opendatos('informacionSocioecomonica')">informacion Socio-Economica<br></a>
	<a href="#" onclick="opendatos('datosMedicos')">datos medicos<br></a>
	<a href="#" onclick="opendatos('informacionVivienda')">informacion sobre vivienda<br></a>
	<a href="#" onclick="opendatos('informacionRehabilitacion')">informacion sobre rehabilitacion<br></a>
	<a href="#" onclick="opendatos('datosFamiliares')">datos familiares<br></a>
</nav>
<div class="contenido">
		<form action="">	
			<div id="datosPersonales" class="datos">
			
				<table>
					<tr><td class="dere">
					  Nombres:</td><td class="iz"> <input type="text"  name="nombre1" id="nombre1">
					</td></tr>
					<tr><TD></TD>
						<td>
							<input type="text" id="nombre2">
						</td>
					</tr>
					<tr><td class="dere">  Apellido Paterno:</td><td class="iz"> <input type="text" class="textbox" id="apellidoPaterno"><br>
					</td></tr>
					<tr><td class="dere">  Apellido Materno:</td><td class="iz"> <input type="text" class="textbox" id="apellidoMaterno"><br>
					</td></tr>
					<tr><td class="dere">  Fecha de registro IBC:</td><td class="iz"> <input type="DATE" class="textbox" id="fechaRegisttro"><br>
					</td></tr>
					<tr><td class="dere">  Codigo de registro(sigma):</td><td class="iz"> <input type="text" class="textbox" id="sigma"><br>
					</td></tr>
					<tr><td class="dere">  C.I.:</td><td class="iz"> <input type="text" class="textbox" id="ci"><br>
					</td></tr>
					<tr><td class="dere">  Sexo:</td>
						<td class="iz"> 
						<select id="sexo">
						  <option value=""></option>
						  <option value="M">Masculino</option>
						  <option value="F">Femenino</option>
						</select>
					</td></tr>
					<tr><td class="dere">  Estado Civil:</td><td class="iz"> 
						<select id="estadoCivil">
						  <option value=""></option>
						  <option value="Soltero">Soltero</option>
						  <option value="Casado">Casado</option>
						  <option value="Divorciado">Divorciado</option>
						  <option value="Viudo">Viudo</option>
						</select><br>
					</td></tr>
					<tr><td class="dere">  Nacionalidad:</td><td class="iz"> <input type="text" class="textbox" id="nacionalidad"><br>
					</td></tr>
					<tr><td class="dere">  Idioma Materno:</td><td class="iz"> <input type="text" class="textbox" id="idiomaMaterno"><br>
					</td></tr>
					<tr><td class="dere">  Lugar de Nacimiento:</td><td class="iz"> <input type="text" class="textbox" id="lugarNacimiento"><br>
					</td></tr>
					<tr><td class="dere">  Fecha de Nacimiento:</td><td class="iz"> <input type="date"  id="fechaNacimiento"><br>
					</td></tr>
				</table>
				<p onclick="inssertar(this.value)"> guardar </p>
			</div>
		</form>	
			<div id="informacionContacto" class="datos" style="display: none;">
				<table>
					<tr><td class="dere">  Lugar de Residencia:</td><td class="iz"> <input type="text" class="textbox" name="lname"><br>
					</td></tr>
					<tr><td class="dere">  Direcccion:</td><td class="iz"> <input type="text" class="textbox" name="lname"><br>
					</td></tr>
					<tr><td class="dere">  Telefono:</td><td class="iz"> <input type="text" class="textbox" name="lname"><br>
					</td></tr>
					<tr><td class="dere">  Celular:</td><td class="iz"> <input type="text" class="textbox" name="lname"><br>
					</td></tr>
					<tr><td class="dere">  Telefono de Referencia:</td><td class="iz"> <input type="text" class="textbox" name="lname"><br>
					</td></tr>
					<tr><td class="dere">  Email:</td><td class="iz"> <input type="email" class="textbox" name="lname"><br>
					</td></tr>
				</table>
			</div>
			<div id="informacionSocioecomonica" class="datos" style="display:none;">
				<table>
					<tr><td class="dere">  Ingresos del Beneficiario:</td><td class="iz"> <input type="checkbox" name="vehicle" value="Bike">  Sueldo <input type="checkbox" name="vehicle" value="Bike"> Subsidio <input type="checkbox" name="vehicle" value="Bike"> Renta <input type="checkbox" name="vehicle" value="Bike"> Bono <br><input type="checkbox" name="vehicle" value="Bike"> Ingresosos Propios <input type="checkbox" name="vehicle" value="Bike"> Dependientes <input type="checkbox" name="vehicle" value="Bike"> Otros<br>
					</td></tr>
					<tr><td class="dere">  Grados de Instruccion:</td><td class="iz"> <input type="checkbox" name="vehicle" value="Bike">  Primaria <input type="checkbox" name="vehicle" value="Bike"> Secundaria <input type="checkbox" name="vehicle" value="Bike"> Bachiller <input type="checkbox" name="vehicle" value="Bike"> Tecnico <br><input type="checkbox" name="vehicle" value="Bike"> Universitario <input type="checkbox" name="vehicle" value="Bike"> Licenciatura <input type="checkbox" name="vehicle" value="Bike"> Ninguno<br>
					</td></tr>
					<tr><td class="dere">  Otros Estudios:</td><td class="iz"> <input type="text" class="textbox" name="lname"><br>
					</td></tr>
					<tr><td class="dere">  Ocupacion:</td><td class="iz"> <input type="text" class="textbox" name="lname"><br>
					</td></tr>
				</table>
			</div>
			<div id="datosMedicos" class="datos" style=" display: none; ">
				<table>
					<tr><td class="dere">  Tipo de Ceguera:</td><td class="iz"> <input type="checkbox" name="vehicle" value="Bike">  Ceguera Total <input type="checkbox" name="vehicle" value="Bike"> Baja Vision <input type="checkbox" name="vehicle" value="Bike"> O.I. <input type="checkbox" name="vehicle" value="Bike"> O.D. <input type="checkbox" name="vehicle" value="Bike"> A.O.<br>
					</td></tr>
					<tr><td class="dere">  Causas de la Ceguera:</td><td class="iz"> <input type="checkbox" name="vehicle" value="Bike">  Congenito <input type="checkbox" name="vehicle" value="Bike"> Enfermedad <input type="checkbox" name="vehicle" value="Bike"> Accidente
					</td></tr>
					<tr><td class="dere">  Fecha de Inicio de la Ceguera:</td><td class="iz"> <input type="text" class="textbox" name="lname"><br>
					</td></tr>
					<tr><td class="dere">  Diagnostico Medico General:</td><td class="iz">  <textarea rows="4" cols="50">
					</textarea> <br>
					</td></tr>
					<tr><td class="dere">  Donde Recibio Atencion Medica:</td><td class="iz"> <input type="checkbox" name="vehicle" value="Bike"> C.N.S. <input type="checkbox" name="vehicle" value="Bike"> Hospital Publico <input type="checkbox" name="vehicle" value="Bike"> Clinica Privada <input type="checkbox" name="vehicle" value="Bike"> Medico Particular <br><input type="checkbox" name="vehicle" value="Bike"> Otro<input type="text" name="vehicle" value=""><br>
					</td></tr>
					<tr><td class="dere">  Discapacidad Adicional:</td><td class="iz"> <input type="checkbox" name="vehicle" value="Bike"> Si <input type="checkbox" name="vehicle" value="Bike"> No  <input type="text" name="vehicle" value="Especificar"><br>
					</td></tr>
					<tr><td class="dere">  Cuenta con Seguro Medico:</td><td class="iz"> <input type="checkbox" name="vehicle" value="Bike"> Si <input type="checkbox" name="vehicle" value="Bike"> No<br>
					</td></tr>
					<tr><td class="dere">  Nombre de la Institucion del Seguro Medico:</td><td class="iz"> <input type="text" class="textbox" name="lname"><br>
					</td></tr>
				</table>
			</div>
			<div id="informacionVivienda" class="datos" style=" display: none; ">
				<table>
					<tr>
						<td>zona vivienda:</td>
						<td><input type="checkbox" name="zonaVivienda" value="urbana">urbana<input type="checkbox" name="zonaVivienda" value="sub-urbana">sub-urbana<input type="checkbox" name="zonaVivienda" value="rural">rural</td>
					</tr>
					<tr>
						<td>tipo vivienda:</td>
						<td><input type="checkbox" name="tipoVivienda" value="casaIndependiente">casa independiente<input type="checkbox" name="tipoVivienda" value="edificioMultifamiliar">edificio multifamiliar</td>
					</tr>
					<tr>
						<td>servicios basicos</td>
						<td><input type="checkbox" name="serviciosBasicos" value="luz">luz<input type="checkbox" name="serviciosBasicos" value="agua">agua<input type="checkbox" name="serviciosBasicos" value="alcantarillado">alcantarillado<input type="checkbox" name="serviciosBasicos" value="gasDomiciliario">gas domiciliario<input type="checkbox" name="serviciosBasicos" value="telefono">telefono<input type="checkbox" name="serviciosBasicos" value="otro">otro</td>
					</tr>
					<tr>
						<td>tenencia de vivienda</td>
						<td><input type="checkbox" name="tenenciaVivienda" value="propia">propia<input type="checkbox" name="tenenciaVivienda" value="alquilada">alquilada<input type="checkbox" name="tenenciaVivienda" value="anticretico">anticretico<input type="checkbox" name="tenenciaVivienda" value="contratoMixto">contrato mixto<input type="checkbox" name="tenenciaVivienda" value="prestada">prestada<input type="checkbox" name="tenenciaVivienda" value="otro">otro</td>
					</tr>
					<tr>
						<td>accesibilidad a la vivienda</td>
						<td><input type="checkbox" name="accesibilidadVivienda" value="avenida">avenida<input type="checkbox" name="accesibilidadVivienda" value="calle">calle<input type="checkbox" name="accesibilidadVivienda" value="callejon">callejon<input type="checkbox" name="accesibilidadVivienda" value="camino">camino</td>
					</tr>
					<tr>
						<td>numero de habitaciones:</td>
						<td><input type="text" name="numeroHabitaciones"></td>
					</tr>
					<tr>
						<td>baño:</td>
						<td><input type="checkbox" name="bañoVivienda" value="si">si</td>
					</tr>
					<tr>
						<td>cocina:</td>
						<td><input type="checkbox" name="cocinaVivienda" value="si">si</td>
					</tr>
					<tr>
						<td>paredes:</td>
						<td><input type="checkbox" name="paredesVivienda" value="adobe">adobe<input type="checkbox" name="paredesVivienda" value="ladrillo">ladrillo<input type="checkbox" name="paredesVivienda" value="madera">madera<input type="checkbox" name="paredesVivienda" value="otro">otro</td>
					</tr>
					<tr>
						<td>techo:</td>
						<td><input type="checkbox" name="techoVivienda" value="calamina">calamina<input type="checkbox" name="techoVivienda" value="teja">teja<input type="checkbox" name="techoVivienda" value="paja">paja<input type="checkbox" name="techoVivienda" value="otro">otro</td>
					</tr>
					<tr>
						<td>piso:</td>
						<td><input type="checkbox" name="pisoVivienda" value="tierra">tierra<input type="checkbox" name="pisoVivienda" value="cemento">cemento<input type="checkbox" name="pisoVivienda" value="madera">madera<input type="checkbox" name="pisoVivienda" value="otro">otro</td>
					</tr>
				</table>
			</div>
			<div id="informacionRehabilitacion" class="datos" style=" display: none; ">
				<table>
					<tr>
						<td>recibio rehabilitacion</td>
						<td><input type="checkbox" name="rehabilitacion" id="chkRehabilitacion" value="si" onclick="if(this.checked){toogleRehabilitacion('si')} else{toogleRehabilitacion('no')}">si</td>
					</tr>
				</table>
				<div id="datosRehabilitacion" style=" display: none; ">
				<table>
					<tr>
						<td>lugar rehabilitacion:</td>
						<td><input type="text" name="lugarRehabilitacion"></td>
					</tr>
					<tr>
						<td>periodo rehabilitacion</td>
						<td><input type="date" name="inicioRehabilitacion">inicio<input type="date" name="finRehabilitacion">fin</td>
					</tr>
				</table>
				</div>
			     <div id="dynamicInput">
			     	habilidades<br><input type="text" name="myInputs[]">
			     </div>
				 <input type="button" value="añadir habilidad" onClick="addHabilidad('dynamicInput');">
			</div>
			<div id="datosFamiliares" class="datos" style=" display: none; ">
			<input type="button" value="añadir pariente" onClick="addPariente('parientes');">
				<table id="parientes">
					<tr>
						<th>tipo parentesco</th>
						<th>nombre</th>
						<th>apellido paterno</th>
						<th>apellido materno</th>
						<th>grado de instruccion</th>
						<th>ocupacion</th>
						<th>discapacidad</th>
						<th>fecha de nacimento</th>
						<th>observaciones</th>
					</tr>
				<!-- </table>
				<table> -->

					<tr>
						<td><input type="text" name="tipoParentesco"></td>
						<td><input type="text" name="nombrePariente"></td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td>
							<select>
							  <option value="">ninguna</option>
							  <option value="pri">primaria</option>
							  <option value="Femenino">secundaria</option>
							  <option>tecnico</option>
							  <option>universitario</option>
							  <option>licenciatura</option>
							</select>
						</td>
						<td><input type="text" name=""></td>
						<td><input type="text" name=""></td>
						<td><input type="date" name=""></td>
						<td><input type="text" name=""></td>
					</tr>
				</table>
				
			</div>
</div>
</div>
</body>