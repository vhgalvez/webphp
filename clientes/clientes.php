<html lang="es">

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>



		<?php
			require 'conexion.php';

			$cedula= $_GET['cedula'];

			$sql = "SELECT * FROM usuariosp WHERE cedula = '$cedula'";
			$resultado = $mysqli->query($sql);
			$row = $resultado->fetch_array(MYSQLI_ASSOC);

			echo $resultado
			echo $row

			

		?>

	</body>
</html>
