<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Menu Principal</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
		<link rel="stylesheet" type="text/css" href="CSS/animacion.css">
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

			<button style="height:5em;" class="MiBotonUTN" onclick="location.href='PiedraPapelTijera2.php'">Piedra Papel o Tijera</button>

			<button style="height:5em;" class="MiBotonUTN" onclick="location.href='ReflejosDaltonicos1.php'">Reflejos Daltonicos</button>
		</div>




		<div class="Cajita animated bounceInUp" align="right" style="width:88%; margin-top:10%; position:relative">
			<a class="MiBotonUTNLinea" align="right" onclick="location.href='Sesion/logout.php'">Cerrar Sesión</a>	
		</div>
	</body>
</html>