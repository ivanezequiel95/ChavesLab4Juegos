<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Menu Principal</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="animacion.css">
		<!--final de Estilos-->

		<?php  
		session_start();
		//var_dump($_SESSION);
		if (!isset($_SESSION['UsuarioRegistrado'])) 
		{
			header("location:index.php");
		}
		?>

		</head>

	<body>
		<div class="CajaCha animated bounceInLeft">
				<button style="height:5em;" class="MiBotonUTN" onclick="location.href='AdivinaElNumero2.php'">Adivina el Numero</button>

				<button style="height:5em;" class="MiBotonUTN" onclick="location.href='PiedarPapelTijera2.php'">Piedra Papel o Tijera</button>

				<button style="height:5em;" class="MiBotonUTN" onclick="location.href='ReflejosDaltonicos1.php'">Reflejos Daltonicos</button>

				<div class="CajaAbajo animated bounceInUp">
					<a class="MiBotonUTNLinea" onclick="location.href='logout.php'">Cerrar Sesión</a>	
				</div>
		</div>
	</body>
</html>