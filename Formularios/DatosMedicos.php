
<head>
</head>
<body>
<style>
.cuadro  {
  text-align: center;
  margin:auto;
  height:auto;
	border-radius: 10px 10px 10px 10px;
-moz-border-radius: 10px 10px 10px 10px;
-webkit-border-radius: 10px 10px 10px 10px;
border: 10px solid #9ca5ab;
/*background-color:#cccccc;*/
}
.botones{
	background-color: #4CAF50;

    display: inline-block;
  font-family: 'Bitstream Vera Sans Mono';
  font-size: 20px;
  font-style: normal;
  font-variant: small-caps;
  font-weight: 400;
  line-height: 45px;
}
.btn {
  background: #71b5e3;
  background-image: -webkit-linear-gradient(top, #71b5e3, #1d70a3);
  background-image: -moz-linear-gradient(top, #71b5e3, #1d70a3);
  background-image: -ms-linear-gradient(top, #71b5e3, #1d70a3);
  background-image: -o-linear-gradient(top, #71b5e3, #1d70a3);
  background-image: linear-gradient(to bottom, #71b5e3, #1d70a3);
  -webkit-border-radius: 9;
  -moz-border-radius: 9;
  border-radius: 9px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
.Dere{
	text-align: right;
}
.iz{
	text-align: left;
}
.center {
    width:70%; 
    margin-left:15%; 
    margin-right:15%;
  }
 .textbox{
 	width: 282;
 }
 .titulo {
  padding: 25px;
  position: top left;
  text-align: left;

  font-family: 'Courier New';
  font-size: 38px;
  font-style: normal;
  font-variant: small-caps;
  font-weight: 400;
  line-height: 41.8px;
}
</style>

	<form action="demo_form.asp">
	<div class="cuadro">
	<div class="titulo">Ficha Social</div>
<table class="center">
<tr><th class="dere">
  Nombres:</th><th class="iz"> <input type="text"  name="fname"><input type="text" name="fname"><br>
</th></tr>
<tr><th class="dere">  Apellido Paterno:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Apellido Materno:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Fecha de registro IBC:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Codigo de registro(sigma):</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  C.I.:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
<tr><th class="dere">  Tipo de Ceguera:</th><th class="iz"> <input type="checkbox" name="vehicle" value="Bike">  Ceguera Total <input type="checkbox" name="vehicle" value="Bike"> Baja Vision <input type="checkbox" name="vehicle" value="Bike"> O.I. <input type="checkbox" name="vehicle" value="Bike"> O.D. <input type="checkbox" name="vehicle" value="Bike"> A.O.<br>
</th></tr>
<tr><th class="dere">  Causas de la Ceguera:</th><th class="iz"> <input type="checkbox" name="vehicle" value="Bike">  Congenito <input type="checkbox" name="vehicle" value="Bike"> Enfermedad <input type="checkbox" name="vehicle" value="Bike"> Accidente
</th></tr>
<tr><th class="dere">  Fecha de Inicio de la Ceguera:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Diagnostico Medico General:</th><th class="iz">  <textarea rows="4" cols="50">
</textarea> <br>
</th></tr>
<tr><th class="dere">  Donde Recibio Atencion Medica:</th><th class="iz"> <input type="checkbox" name="vehicle" value="Bike"> C.N.S. <input type="checkbox" name="vehicle" value="Bike"> Hospital Publico <input type="checkbox" name="vehicle" value="Bike"> Clinica Privada <input type="checkbox" name="vehicle" value="Bike"> Medico Particular <br><input type="checkbox" name="vehicle" value="Bike"> Otro<input type="text" name="vehicle" value=""><br>
</th></tr>
<tr><th class="dere">  Discapacidad Adicional:</th><th class="iz"> <input type="checkbox" name="vehicle" value="Bike"> Si <input type="checkbox" name="vehicle" value="Bike"> No  <input type="text" name="vehicle" value="Especificar"><br>
</th></tr>
<tr><th class="dere">  Cuenta con Seguro Medico:</th><th class="iz"> <input type="checkbox" name="vehicle" value="Bike"> Si <input type="checkbox" name="vehicle" value="Bike"> No<br>
</th></tr>
<tr><th class="dere">  Nombre de la Institucion del Seguro Medico:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr>
	<th></th>
  <th><input class="btn" type="submit" value="Registrar"></th>
  </tr>
  </table>
  </div>
	</form>
	
</body>
