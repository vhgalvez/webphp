<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<?php

	require 'conexion.php';

	$usuario = $_POST['usuario'];
	$contra = $_POST['contra'];
	$nombre = $_POST['nombre'];
	$cedula = $_POST['cedula'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$placa = $_POST['placa'];




	$sql = "INSERT INTO conductores (usuario, contra, nombre, cedula, telefono, email, placa) VALUES ('$usuario', '$contra', '$nombre', '$cedula', '$telefono', '$email', '$placa')";
	$resultado = $mysqli->query($sql);




?>




<html lang="es">
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>

					<a href="conductores.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
</html>
