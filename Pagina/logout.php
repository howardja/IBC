<? 
//Reanudamos la sesión 
session_start(); 
//Literalmente la destruimos 
session_destroy(); 
//Redireccionamos a index.html (al inicio de sesión) 
header("Location: index.html"); 
?>