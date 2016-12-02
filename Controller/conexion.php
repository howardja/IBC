<?php
session_start();
$servidor = 'localhost';
$usuario = 'ibccocha_admin';
$password = 'IBv8SekUFSw0W*';
$base_datos = 'ibccocha_db';
$conexion = mysql_connect($servidor,$usuario,$password,$base_datos) or die (mysql_error());
mysql_select_db($base_datos,$conexion);
?>