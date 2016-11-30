<link rel="stylesheet" type="text/css" href="estilos.css">
<!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->
<script src="registrar.js"></script>

<body onload="datosPersonales();">
<div class="cuadro">
<label id="idAfiliado" style=""><?php echo $_GET['id'] ?></label>
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
		<form >
			<div id='datosPersonales' class='datos'>	
			</div>
		</form>	
			<div id="informacionContacto" class="datos" style="display: none;">
				
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