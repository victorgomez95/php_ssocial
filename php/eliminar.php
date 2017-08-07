<?php
include('../conectar.php');
extract($_POST);

$sql = mysql_query("delete from empleados where idempleado='$idempleado'",$conectar);

if($sql)
{
	echo "Si se puedo";
}
else
{
	echo "a la verch";
}
?>
