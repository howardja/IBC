<?php
session_start();
require_once('../Controller/conexion.php');


if ($_POST["usuario1"]){

	$conn_bd=mysql_connect($servidor, $usuario, $password ) or die("Error en la conexion a la base de datos");
	mysql_query( $base_datos, $conn_bd );
	$result=mysql_query("SELECT * FROM Usuario WHERE usuario='".$_POST["usuario1"]."' and password='".$_POST["pass1"]."'",$conn_bd);
	
	if (mysql_num_rows($result)==1){
		$_SESSION['usuario_activo']=mysql_result($result,0,"usuario");
		$_SESSION['tipo_usuario_activo']=mysql_result($result,0,"tipo_usuario");
		$_SESSION['nombre_activo']=mysql_result($result,0,"nombre");
		echo "Cargando......<br>";
		header('Location: ../menu.html?tipo_usuario_activo=Administrador');
		
	} else
	{
		?>
        <script type="text/javascript">
		alert("Un error ha ocurrido \n Favor de contactar al Administrador");
		window.location = "../login.html";
		</script>
		<?php 
	}
}

?>
		<script type="text/javascript">
		window.location = "../login.html";
		</script>