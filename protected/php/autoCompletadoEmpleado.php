<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');

$str = $_GET['term'];

if (strlen($str) > 2) {

	$db = new SQLite3("../data/empleados.db");

	$cs = $db -> query("SELECT * FROM elfico WHERE NumEmpleado LIKE '%$_GET[term]%' ORDER BY NumEmpleado LIMIT 5;");
		    
	while($resul = $cs->fetchArray()) {
	  $return_arr[] =  $resul['NumEmpleado'];
	}
	echo json_encode($return_arr);

	$db -> close();
}


 ?>