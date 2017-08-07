<?php  
$host = "127.0.0.1";
$usu="root";
$pass="";
$bd="serviciosocial";
$conectar = mysql_connect($host,$usu,$pass);
mysql_select_db($bd,$conectar);
?>