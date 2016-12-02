
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#todo").hide();
    });
    $("#show").click(function(){
        $("#todo").show();
    });
});
</script>
</head>
<body>
<p id="todo">hola
  <p>If you click on the "Hide" button, I will disappear.</p>
</P>
<button id="hide">Hide</button>
<button id="show">Show</button>



	<form action="Nomina.php">
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
</th></tr>
<tr><th class="dere">  Sexo:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Estado Civil:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Nacionalidad:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Idioma Materno:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Lugar de Nacimiento:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Fecha de Nacimiento:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Lugar de Residencia:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Direcccion:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Telefono:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Celular:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Telefono de Referencia:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Email:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Ingresos del Beneficiario:</th><th class="iz"> <input type="checkbox" name="vehicle" value="Bike">  Sueldo <input type="checkbox" name="vehicle" value="Bike"> Subsidio <input type="checkbox" name="vehicle" value="Bike"> Renta <input type="checkbox" name="vehicle" value="Bike"> Bono <br><input type="checkbox" name="vehicle" value="Bike"> Ingresosos Propios <input type="checkbox" name="vehicle" value="Bike"> Dependientes <input type="checkbox" name="vehicle" value="Bike"> Otros<br>
</th></tr>
<tr><th class="dere">  Grados de Instruccion:</th><th class="iz"> <input type="checkbox" name="vehicle" value="Bike">  Primaria <input type="checkbox" name="vehicle" value="Bike"> Secundaria <input type="checkbox" name="vehicle" value="Bike"> Bachiller <input type="checkbox" name="vehicle" value="Bike"> Tecnico <br><input type="checkbox" name="vehicle" value="Bike"> Universitario <input type="checkbox" name="vehicle" value="Bike"> Licenciatura <input type="checkbox" name="vehicle" value="Bike"> Ninguno<br>
</th></tr>
<tr><th class="dere">  Otros Estudios:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr><th class="dere">  Ocupacion:</th><th class="iz"> <input type="text" class="textbox" name="lname"><br>
</th></tr>
<tr>
	<th></th>
  <th><input class="btn" type="submit" value="Registrar"></th>
  </tr>
  </table>
  </div>
	</form>
	
</body>
