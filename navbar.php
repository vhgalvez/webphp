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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>

	</head>


	<body>
	<nav class="navbar navbar-inverse">
				<div class="container-fluid">
				<div class="navbar-header">
				<a class="navbar-brand" href="#">LLanosTour</a>
				</div>

				<ul class="nav navbar-nav">

				<li class="active"><a href="inicio.php">INICIO</a></li>
				<li><a href="servicios.php">SERVICIOS</a></li>
				<li><a href="conductores.php">CONDUCTORES</a></li>
				<li><a href="logout.php">SALIR</a></li>

		</nav>


	</body>
</html>
