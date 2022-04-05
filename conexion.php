<?php

	$mysqli = new mysqli('localhost', 'root', 'efm&&$0432mgTG', 'st');

	if($mysqli->connect_error){

		die('Error en la conexion' . $mysqli->connect_error);

	}
?>
