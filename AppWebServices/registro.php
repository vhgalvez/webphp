<?php include ('functions.php');
$nombres=$_GET['nombres'];
$telefono=$_GET['tel'];
$destino=$_GET['destino'];
$email=$_GET['email'];
$cedula=$_GET['cedula'];
$origen=$_GET['origen'];
$tiempo = date('Y/m/d H:i'); //en ese orden para que compatibilice con MySQL

ejecutarSQLCommand("INSERT INTO  `usuariosp` (nombres, telefono, destino, email, cedula, origen, tiempo)VALUES
('$nombres' ,'$telefono','$destino' ,'$email','$cedula' ,'$origen', '$tiempo')




 ON DUPLICATE KEY UPDATE `nombres`= '$nombres',
`telefono`='$telefono';");


 ?>
