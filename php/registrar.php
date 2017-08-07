<?php
include('../conectar.php');
extract($_POST);

$sql = mysql_query("insert into empleadso(nombre,appaterno,apmaterno,puesto,salario) values ('$nombre','$appaterno','$apmaterno','$puesto','$salario')",$conectar);


?>
