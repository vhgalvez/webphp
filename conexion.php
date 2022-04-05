<?php

	$mysqli = new mysqli('localhost', 'root', '3QZK7k_.z7GSs]B5zgxjmr~2KUU%)hz<xFt_heGhgd5w4', 'st');

	if($mysqli->connect_error){

		die('Error en la conexion' . $mysqli->connect_error);

	}
	$mysqli -> set_charset("utf8");
?>
