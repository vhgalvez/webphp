<?php

	$conexion=mysqli_connect('localhost', 'root', '3QZK7k_.z7GSs]B5zgxjmr~2KUU%)hz<xFt_heGhgd5w4', 'st');


 ?>

<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Clientes LLanosTour</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">LLanos<span>Tour</span></a></div>
			</header>


		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>CLIENTES LLANOSTOUR</h1>

						<?php

						$cedula = $_POST['cedula'];
						$sql="SELECT DISTINCT nombres from usuariosp WHERE cedula='$cedula' LIMIT 0, 1";
						$result=mysqli_query($conexion,$sql);
						while($mostrar=mysqli_fetch_array($result)){

						?>
								<p style=”text-align: justify;”>
								se prestara el servicio de transporte terrestre automotor especial, a clientes Qué con nombre propio hayan solicitado
								su servicio de turismo previamente con Llanos tour s.a.s agencia de viajes y turismo en donde permite Llanos tour s.a.s
								obre como representante de ellos artículo  2.2.1.6.3  numeral 3  CONTRATO  PARA  TRANSPORTE  DE  TURISTAS
								este contrato reposara en los archivos de Llanos tour s.a.s y podrá ser comprobado   en la plataforma
								que Llanos tour s.a.s proporcione. LEY 1266 DEL 2008 HABEAS DATA además portaran un carne que
								los acrediten como usuarios  de la compañía	</p>
								<p> </p>
								<mark> <?php echo $mostrar['nombres'] ?> - <?php echo $cedula?> </mark>
								<p> </p>


							<td><a href="index.html" class="button big scrolly">Consultar</a></td>
							<p> </p>


						<?php
						}
						?>

					</header>
				</div>
			</section>


		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
