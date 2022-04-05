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

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$cedula = $_POST['cedula'];
	$destino = $_POST['destino'];
	$origen = $_POST['origen'];


//$estado_civil = $_POST['estado_civil'];
//$hijos = isset($_POST['hijos']) ? $_POST['hijos'] : 0;
//$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;

//	$arrayIntereses = null;

//	$num_array = count($intereses);
//	$contador = 0;

//	if($num_array>0){
//		foreach ($intereses as $key => $value) {
//			if ($contador != $num_array-1)
//			$arrayIntereses .= $value.' ';
//			else
//			$arrayIntereses .= $value;
//			$contador++;
//		}
//	}

	$sql = "UPDATE usuariosp SET nombres='$nombre', email='$email', telefono='$telefono', cedula='$cedula', origen='$origen', destino='$destino' WHERE idu = '$id'";
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
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>

					<a href="servicios.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
</html>
