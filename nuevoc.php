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


<html lang="es">

	<head>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>

			<form class="form-horizontal" method="POST" action="guardarc.php" autocomplete="off">

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
					</div>
				</div>

				<div class="form-group">
					<label for="cedula" class="col-sm-2 control-label">Cedula</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="cedula" name="cedula" placeholder="Cedula">
					</div>
				</div>

				<div class="form-group">
					<label for="contra" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="contra" name="contra" placeholder="Contraseña">
					</div>
				</div>

				<div class="form-group">
					<label for="usuario" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
					</div>
				</div>

				<div class="form-group">
					<label for="placa" class="col-sm-2 control-label">Placa</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="placa" name="placa" placeholder="Placa" required>
					</div>
				</div>





				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="conductores.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
