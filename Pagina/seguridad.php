<?php 
session_start(); 

if (isset($_SESSION["id"])) { 
    $id = $_SESSION["id"]; 
} else { 
    $id = "conectado"; 
} 

if ($id == "conectado") { 
   //header("Location: menu.html"); 
    echo "<script language=\"JavaScript\" type=\"text/javascript\">\n"; 
    echo "<!--\n"; 
    echo "top.location.href = 'login.html';\n"; 
    echo "//-->\n"; 
    echo "</script>\n"; 
    exit(); 
} 
?> 