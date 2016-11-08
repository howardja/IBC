<?php
session_start();
$servidor = 'localhost';
$usuario = 'pygescom_ibc';
$password = 'ibccochabamba2016';
$base_datos = 'pygescom_ibc';
$conexion = mysql_connect($servidor,$usuario,$password,$base_datos) or die (mysql_error());
mysql_select_db($base_datos,$conexion);
?>